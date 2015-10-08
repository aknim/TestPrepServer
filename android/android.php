<?php

        $type   = urldecode($_POST['type']);
        if (strcmp($type,"req")==0){
 		exec("php db.php 2", $ret);
		foreach ($ret as $line) {
			print $line . "\n";
		}      
 	}
        else if (strcmp($type,"data")==0){
	        $data = urldecode($_POST['data']);
		$dataSplit = explode(";", $data);
 		exec("php update.php $dataSplit[0] $dataSplit[1]", $ret);
		foreach ($ret as $line) {
                        print $line . "\n";
                }
        }

 ?>
