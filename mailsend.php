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
$m = "mail_".$_POST["to"];

    $sql="INSERT INTO $m VALUES(NULL,'$from','inbox','".$_POST["subject"]."','".$_POST['body']."',NULL)";
echo("$sql");

    mysqli_query($conn,$sql);
 
	header('location:student.php');
?>