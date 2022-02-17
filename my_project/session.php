<?php
include 'database.php';
include "check_login.php";

session_start();
if(isset($_POST['submit'])){
  $email = $_POST['email'];
   $pswd = $_POST['password'];

   $sql = "SELECT * FROM userlogin where userEmail='$email' AND password='$pswd'";

   $result= mysqli_query($conn,$sql);

if(mysqli_fetch_assoc($result))
{
  $_SESSION['user']= $_POST['email'];
  header('location:table.php');
}
else
{
  header("location:index.php?invalid= please enter correct username and password");
}

}
?>
