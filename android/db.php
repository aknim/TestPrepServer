<?php
   		// connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
   		// select a database
   $db = $m->mydb;
//   echo "Database mydb selected";
//   $collection = $db->createCollection("mycol");

   $collection = new MongoCollection($db, 'questions');	
   $cursor = $collection->find();
   $return = $argv[1]."\n";
   foreach ($cursor as $id => $question){
   $return = $return.$question["q"]."\n";
    }
   echo $return;
?>
