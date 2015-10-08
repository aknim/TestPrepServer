<?php
   $m = new MongoClient();
   $db = $m->mydb;
//argv1=id, argv2=score
   $users = new MongoCollection($db, 'users');	
   $id =0 + $argv[1];
   $user = $users->findOne(array("_id" => $id));
   $score =$user["score"];
   $score = $score +$argv[2];
   
   $users->update(array("_id" => $id), array('$set' => array("score" => $score)));

   $user = $users->findOne(array("_id" => $id));
   $score =$user["score"];
   echo "updated score: $score \n";
   
?>
