<?php
include "connect.php";
session_start();
if(!isset($_SESSION['admin'])){
    header('location:dadaJi.php');
}
if(isset($_POST['teacher'])){
    mysqli_query($conn,"insert into login values('".$_POST['t_username']."','".md5($_POST['t_password'])."','faculty') ");
}
if(isset($_POST['coe'])){
    mysqli_query($conn,"insert into login values('".$_POST['c_username']."','".md5($_POST['c_password'])."','coe') ");
}


?>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div>
<form class="form-signin" method="post">
    <h5 class="form-heading">Teacher</h5>
    <input name="t_username" placeholder="username">
    <input name="t_password" placeholder="password">
    <button type="submit" name="teacher">Submit</button>
</form>
<form class="form-signin" method="post">
    <h5 class="form-heading">Coe</h5>
    <input name="c_username" placeholder="username">
    <input name="c_password" placeholder="password">
    <button type="submit" name="coe">Submit</button>
</form>
</div>
</body>
</html>
