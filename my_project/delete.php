<?php
include 'database.php';
include "check_login.php";
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];
  $sql = "DELETE FROM ItemsTable WHERE itemID=$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "deleted succesfully";
     header("location:table.php");
  }else{
  die (mysqli_connect_error($conn));
}
}

 ?>
