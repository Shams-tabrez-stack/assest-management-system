<?php
session_start();
$db_host = "localhost";
$db_name = "newDB";
$db_user = "root";
$db_pswd = "training2021";


$conn = mysqli_connect($db_host, $db_user, $db_pswd,$db_name );
if (mysqli_connect_error()){

  echo mysqli_connect_error();
  exit;
}
//  echo "connection succesful";


 ?>
