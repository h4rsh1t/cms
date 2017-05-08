<?php
include "connect.php";
session_start();
if(isset($_SESSION['student'])){
    $from = $_SESSION['student'];
}
if(isset($_SESSION['faculty'])){
    $from = $_SESSION['faculty'];
}

$sql="INSERT INTO to_do_all VALUES('$from','".$_POST['taskName']."','".$_POST['body']."',NULL)";
echo("$sql");

if(isset($_SESSION['student']) && mysqli_query($conn,$sql)){
    header('location:student.php');
}
if(isset($_SESSION['faculty'])&& mysqli_query($conn,$sql)){
    header('location:faculty.php');
}


?>
