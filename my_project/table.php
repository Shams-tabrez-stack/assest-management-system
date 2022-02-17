
<?php

session_start();
include 'database.php';
include "check_login.php";
 ?>

 <?phpude "check_login.php";


 		?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<link rel="stylesheet" href="bootstrap.min.css.map">
  <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <title>User list</title>

</head>

<body>

  <div class="container-fluid w-100 my-2  p-5  bg-dark form">
    <div class="container mb-3 w-50 d-flex justify-content-center ">
<form method="post">
  <input type="search" name="search" id="search" class="form-control rounded mb-1 " placeholder="Search"/>
  <button type="submit" id="submit" name="submit" class="btn btn-outline-primary  ">Search</button>
</form>
</div>
    <a class="btn btn-primary float-end mx-2" href="logout.php" role="button"> logout</a>
    <a class="btn btn-primary float-start" href="firstpage.php" role="button"><i class="fa fa-plus"></i>ADD</a><br>

<br><br>

    <table class="table table-striped table-dark ">

      <thead class="thead-dark">
        <tr>
          <th scope="col">itemID</th>
          <th scope="col"> Item_Name</th>
          <th scope="col">Uniq_Number</th>
          <th scope="col">Arrival_Date</th>
          <th scope="col"> Assigned_To</th>
          <th scope="col"> Created_At</th>
          <th scope="col"> Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
if(!empty($_POST['search'])){
  $search = $_POST['search'];
  $sql ="SELECT *  FROM ItemsTable WHERE itemID=$search OR Item_Name LIKE '%$search%'";

} else{


       $sql ="SELECT * FROM ItemsTable";
     }
       $result = mysqli_query($conn,$sql);
       $row =mysqli_fetch_array($result);
       if($result){
         $uid=0;
       while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) {

       $uid =$uid+1;
       //$val = strtotime(date("y-m-d H:i:s"));

       $id=$row['itemID'];
       echo "<tr>";
       echo "<td>".$uid."</td>";
       echo "<td>".$row['Item_Name']."</td>";
       echo "<td>".$row['Uniq_Number']."</td>";
       echo "<td>".$row['Arrival_Date']."</td>";
       echo "<td>".$row['Assigned_To']."</td>";
       echo "<td>".$row['Created_At']."</td>";
       echo "<td>
       <a class='btn btn-primary' href='update.php?updateid=$id' role='button'><i class='fa fa-edit'></i>Edit</a>
       <a class='btn btn-danger float-end'  href='delete.php?deleteid=$id' onClick=\"javascript: return confirm('do you want to delete');\" role='button'><i class='fa fa-trash'></i>Delete </a>
       </td>";
       echo "</tr>";
       }
       }
         ?>


      </tbody>
    </table>
  </div>
</body>


</html>
