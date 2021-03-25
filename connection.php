<<<<<<< HEAD

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
=======

<?php

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname ="tailoring_shop_database";
  // create connection
  $con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
  if (mysqli_connect_error()) 

?>

>>>>>>> 8ea50a58441e776c8f0db9c839dae43d3adef1a2
