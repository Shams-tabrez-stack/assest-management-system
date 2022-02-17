<?php
include 'database.php';
$id= $_GET['updateid'];
$sql ="SELECT * FROM ItemsTable WHERE itemID=$id";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result, MYSQLI_ASSOC);

$itemID =$row['itemID'];
$ItemName =$row['Item_Name'];
$UniqNumber = $row['Uniq_Number'];
$datetime =$row['Arrival_Date'];
$AssignedTo =$row['Assigned_To'];

if(isset($_POST['update'])){
  $id =$_POST['itemID'];
$Item_Name =$_POST['Iname'];
$Uniq_Number =$_POST['unum'];
$datetime=$_POST['datetime'];
$Assigned_To =$_POST['assign'];

$query = "UPDATE ItemsTable SET  Item_Name='$Item_Name', Uniq_Number='$Uniq_Number',Arrival_Date='$datetime',Assigned_To='$Assigned_To' WHERE itemID=$id";

          if(mysqli_query($conn,$query)){
            echo "updated succesfully";
            header('location:table.php');
          }else{
            echo "failed";
          }
}
 ?>


<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome.min.js">
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
        <!-- <input type="hidden"  name= "itemID"  value="<?php //echo $itemID;?>"/> -->
        <input type="text" id="Iname" name= "Iname" class="form-control rounded-lg" value="<?php echo $ItemName;?>" placeholder="Enter Item Name" onkeyup="namecheck();">
        <div id="name_error">
        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="Unique_No">Unique_No</label>
        <input type="text" id="unum" name= "unum" class="form-control rounded-lg" value="<?php echo $UniqNumber;?>" placeholder="Enter Unique_No" onkeyup="numbercheck();">
        <div id="num_error">
        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="date">Arrival_date</label>
        <input type="datetime-local" id="dateT" class="form-control" value="<?php echo date('Y-m-d\TH:i', strtotime($row['Arrival_Date'])) ;?>" name="datetime" onchange="datecheck();">
        <div id="date_error">

        </div>
      </div>
      <br>
      <div class="form-group w-75 mx-5">
        <label for="Assigned_to">Assigned_to</label>
        <input type="text" id="assign" name="assign" class="form-control rounded-lg" value= "<?php echo $AssignedTo;?>"  placeholder="Enter Assigned_to" onkeyup="assignedcheck();">
<div id="assign_check">

</div>
        <br><br>
        <div class="d-grid">

          <button type="submit" name= "update" class="btn btn-primary" id="sub">Update</button>
        </div>
      </div>
  </div>
  </form>

  </div>
  <script src="reg.js" type="text/javascript">
  </script>
</body>

</html>


//controller
function delete($itemID){
   $this->load->model('User_model');
   $this->User_model->getUser($itemID);
   if(empty($item)){
     $this->session->set_flashdata('failure', 'record not foumnd');
     redirect(base_url().'index.php/User/index');
   }
     $this->User_model->deleteUser($itemID);
     $this->session->set_flashdata('success','deleted succsfully');
     redirect(base_url().'index.php/User/index');

}

//model
function deleteUser(){
  $this->db->where('itemID',$itemID);
  $this->db->delete('ItemsTable');
}
