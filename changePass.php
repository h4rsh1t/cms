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

$oldPass = md5($_POST['oldPass']);
$newPass = $_POST['newPass'];
$rNewPass = $_POST['rNewPass'];

$sql = "SELECT password FROM login WHERE username = '".$from."'";
$sql1 = "UPDATE login SET password = '".md5($newPass)."' WHERE username ='".$from."'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
        if($row['password'] === $oldPass){
            if($newPass === $rNewPass){
                mysqli_query($conn,$sql1);

            }else{
                echo "Password Does not match";
            }
        }else{
           echo  "Please Enter a valid password";
        }
}


mysqli_query($conn,$sql);

if(isset($_SESSION['student'])){
    header('location:student.php');
}
if(isset($_SESSION['faculty'])){
    header('location:faculty.php');
}

?>
