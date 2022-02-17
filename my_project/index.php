<?php
include 'database.php';
if(!empty($_SESSION["user"])){
    header("Location:table.php");
}
?>
<!DOCTYPE html>
<html lang="en">

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
  <div class="container  my-5 py-5 bg-light shadow-lg form d-flex justify-content-center">
    <span id="invalid"></span>
    <form action="session.php"  method="post">

      <div class="form-group mx-5">
        <h3>SignIn</h3>
        <hr><br>
      </div>
      <div class="form-group  mx-5 ">
        <label for="Email">Email address</label>
        <input type="email" class="form-control " id="email" name ="email" onkeyup="emailcheck();" placeholder="Enter email">
        <div id="email_error"> </div>
      </div>
      <br>
      <div class="form-group  mx-5">
        <label for="Password">Password</label>
        <input type="password" autocomplet="off" class="form-control " id="password" name="password" placeholder="Password" onkeyup="passwordcheck();">
        <div id="password_error"> </div>
      </div>
      <div class="d-grid ">
          <button type="submit" name="submit" class="btn btn-primary btn-block mb-2 mx-3 " id="submit">Submit</button>
      </div>
    </form>
  </div>
  <script src="valid.js" type="text/javascript">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
