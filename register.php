<?php

include "connect.php";
session_start();

if($_POST['psw']===$_POST['Rpsw']){
    mysqli_query($conn,"insert into user_info values('".$_POST['username']."','".$_POST['fullName']."','".$_POST['stream']."',".$_POST['semester'].",'".$_POST['section']."',".$_POST['phone'].")");
    $mail = "mail_".$_POST['username'];
    $mail1 = $_POST['stream']."_".$_POST['semester']."_".$_POST['section'];

    $sql="CREATE TABLE $mail(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,rec_id VARCHAR(10) NOT NULL, type VARCHAR(9), subject VARCHAR(100) DEFAULT ' ', content VARCHAR(200) DEFAULT ' ', attach BLOB)";
    mysqli_query($conn,$sql);
    $_SESSION["mail"] = $_POST['username'];
    mysqli_query($conn,"CREATE TABLE $mail1(username VARCHAR(10) NOT NULL PRIMARY KEY,name VARCHAR(30) NOT NULL)");

    $sql1 = "INSERT INTO login VALUES('".$_POST['username']."','".md5($_POST['psw'])."','student')";
    mysqli_query($conn,$sql1);
    header("location:index.php");
}



?>
