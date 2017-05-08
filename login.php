<?php
session_start();
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
$name = $res['name'];
$sql = "insert into login_log values('$email','$name',NULL)";
$info = mysqli_query($conn,$sql);
$sql = "UPDATE user_info set active= 1 WHERE username = '$email'";
$info = mysqli_query($conn,$sql);
$_SESSION["info_user"] = json_encode($res);



    if($row["memberType"] == 'student'){
    $_SESSION["student"] = $email;
    $_SESSION["page"] = "student.php";
        $pic1 = mysqli_query($conn,"SELECT pic from user_info where username = '".$_SESSION['student']."'");
        $_SESSION['pic_name'] = mysqli_fetch_assoc($pic1);
    header("location:student.php");
    }
    else if($row["memberType"] == 'faculty'){
		$_SESSION["faculty"] = $email;
        $_SESSION["page"] = "faculty.php";
        $pic1 = mysqli_query($conn,"SELECT pic from user_info where username = '".$_SESSION['faculty']."'");
        $_SESSION['pic_name'] = mysqli_fetch_assoc($pic1);
        header("location:faculty.php");
    }

}

?>
