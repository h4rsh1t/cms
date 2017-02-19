<?php
session_start();

	/*if(isset($_SESSION['login_user'])){
		header("Location:student.php");
	}*/
include "connect.php";

$email = $_POST['inputEmail'];
$pass = $_POST['inputPassword'];

$sql = "SELECT memberType FROM login WHERE username='$email' AND password='".md5($pass)."'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);
	
$sql = "SELECT * from user_info WHERE username = '$email'";
$info = mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($info);

$_SESSION["info_user"] = json_encode($res);

    if($row["memberType"] == 'student'){
    $_SESSION["student"] = $email;
        
    header("location:student.php");
    }
    else if($row["memberType"] == 'faculty'){
		$_SESSION["faculty"] = $email;
        header("location:faculty.php");
    }
    else if($row["memberType"] == 'coe'){
		$_SESSION["coe"] = $email;
        header("location:coe.php");
    }
}

?>