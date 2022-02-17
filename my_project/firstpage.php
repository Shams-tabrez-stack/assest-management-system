<?php
include 'database.php';
include "check_login.php";
if(isset($_POST['submit'])){
$Item_Name =$_POST['Iname'];
$Uniq_Number =$_POST['unum'];
$datetime=$_POST['datetime'];
$Assigned_To =$_POST['assign'];

$query = "INSERT INTO ItemsTable(Item_Name,Uniq_Number,Arrival_Date,Assigned_To)
          VALUES('$Item_Name',$Uniq_Number,'$datetime','$Assigned_To')";

          $result =mysqli_query($conn,$query);
          if($result){
            echo "data inserted succesfully";
            header('location: table.php');
          }else{
            echo "data not inserted";
          }
}
 ?>


<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
  <link rel="stylesheet" href="styles.css">

  <meta charset="utf-8">
  <title></title>
</head>

<body>

  <div class=" container col-6 col-sm-3 col-md-1 my-5 py-5 bg-light shadow-lg form d-flex justify-content-center">
    <form action="" method="post">
      <div class="mx-5">
        <h3>User Information</h3>
        <hr><br>
      </div>
      <div class="form-group w-75  mx-5">

        <label for="name">Item Name</label>
        <input type="text" id="Iname" name= "Iname" class="form-control rounded-lg" placeholder="Enter Item Name" onkeyup="namecheck();">
        <div id="name_error">
        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="Unique_No">Unique_No</label>
        <input type="number" id="unum" name= "unum" class="form-control rounded-lg" placeholder="Enter Unique_No" onkeyup="numbercheck();">
        <div id="num_error">
        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="date">Arrival_date</label>
        <input type="datetime-local" id="dateT" class="form-control" name="datetime" onchange="datecheck();">
        <div id="date_error">

        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="Assigned_to">Assigned_to</label>
        <input type="text" id="assign" name="assign" class="form-control rounded-lg" placeholder="Enter Assigned_to" onkeyup="assignedcheck();">
<div id="assign_check">

</div>
        <br><br>
        <div class="d-grid">

          <button type="submit" name= "submit" class="btn btn-primary" id="sub">Submit</button>
        </div>
      </div>
  </div>
  </form>

  </div>
  <script src="reg.js" type="text/javascript">
  </script>
</body>

</html>
