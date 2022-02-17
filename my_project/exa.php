<!--
//login page
<?php
//
// $login = false;
// $error = false;
//
// if ($_SERVER["REQUEST_METHOD"]== "POST"){
//   include 'database.php';
//   $userEmail = $_POST['userEmail'];
//   $password = $_POST['passsword'];
//   $sql = "SELECT * FROM userlogin WHERE userEmail = '$userEmail' AND password = '$password'";
//   $result = mysqli_query($conn, $sql);
//   $num = mysqli_num_rows($result);
//   if($num == 1){
//     while ($row = mysqli_fetch_assoc($result)){
//       if(password_verify($password, $row['password']){
//         $login = true;
//         session_start();
//         $_SESSION['loggedin']= true;
//         $_SESSION['loggedin'] = $userEmail;
//         header('location: table.php');
//       }
//     }else{
//       $error = "invalid credentioad";
//     }
//   }
//
// }else{
//   $error = "invalid ajbsdbsasad";
}
$Item_Name = $_POST['Item_Name'];
$unique_no = $_POST['Uniq_No'];
$arrival_date = $_POST['Arrival_Date'];
$created_at = $_POST['created_At'];
 $query = "INSERT INTO ItemsTable(Item_Name,Uniq_no,Arrival_date,Created_At)
            VALUES('$Item_Name','$unique_no','$arrival_date','$created_at')";
$result = mysqli_query($conn,$query);
if($result === false){
echo mysqli_error($conn);
}else{
$id = mysqli_insert_id($conn);
echo "records inserted succesfull";
}
 ?>


 include 'database.php';
 session_start();
 if(isset($_POST[ 'submit'])){
   $email = $_POST['userEmail'];
   $pswd = $_POST['password'];
 $sql = "SELECT * FROM userlogin where userEmail='$email' AND password='$pswd'";

 $result= mysqli_query($conn,$sql);

 $row = mysqli_fetch_array($result, MYSQL_ASSOC);
 $count = mysqli_num_rows($result);

 if($count == 1){
   session_start();
   $_SESSION['userEmail'] = "$email";
   header("location:table.php");
 }
 }
 <?php
$sql ="SELECT * FROM ItemsTable";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_array($result);
if($result){
while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)) {

// $id =$row['itemID'];
// $ItemName =$row['Iname'];
// $UniqNumber = $row['unum'];
// $datentime =$row['datetime'];
// $AssignedTo =$row['assign'];
// $createdat = $row['Created_At'];

echo "<tr>";
echo "<td>".$row['itemID']."</td>";
echo "<td>".$row['Item_Name']."</td>";
echo "<td>".$row['Uniq_Number']."</td>";
echo "<td>".$row['Arrival_Date']."</td>";
echo "<td>".$row['Assigned_To']."</td>";
echo "<td>".$row['Created_At']."</td>";
echo "<td>
<a class='btn btn-primary float-start' href='update.php?updateid='".$id."' role='button'><i class='fa fa-edit'></i>Edit</a>
<a class='btn btn-danger float-end' href='delete.php?deleteid='".$id."' role='button'><i class='fa fa-trash'></i>Delete </a>
</td>";
echo "</tr>";
}
}

  ?>
  <td>
  <a class="btn btn-primary float-start" href="update.php?updateid='.$id.'" role="button"><i class="fa fa-edit"></i>Edit</a>
  <a class="btn btn-danger float-end" href="delete.php?deleteid='.$id.'" role="button"><i class="fa fa-trash"></i>Delete </a>
  </td>
