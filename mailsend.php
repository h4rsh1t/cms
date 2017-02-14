<?php
include "connect.php";
session_start();
if(isset($_SESSION['student'])){
	$from = $_SESSION['student'];
}
if(isset($_SESSION['faculty'])){
	$from = $_SESSION['faculty'];
}
if(isset($_SESSION['coe'])){
	$from = $_SESSION['coe'];
}
//$m = "mail_".$_POST["to"];

    $sql="INSERT INTO mail_all VALUES('$from','".$_POST['to']."','".$_POST["subject"]."','inbox','".$_POST['body']."',NULL,NULL)";
echo("$sql");

    mysqli_query($conn,$sql);
 
	header('location:student.php');
?>