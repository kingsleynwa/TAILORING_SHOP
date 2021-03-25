
<?php

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "tailoring_shop_database";
  // create connection
  
  $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
  if(!$conn){
  	die('Sorry we were unable to connect to the database!');
  }

?>
