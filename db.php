<?php

 $dbhost = "bjgg3qeuqcp0empym1js-mysql.services.clever-cloud.com";
 $dbuser = "uummtpugz4ybcqwx";
 $dbpass = "4J7ukJbvKVZSP37oojBG";
 $db = "bjgg3qeuqcp0empym1js";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
 
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>
