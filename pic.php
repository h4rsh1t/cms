<?php
include "connect.php";

session_start();


$info = pathinfo($_FILES['avatar']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = $_SESSION['pic_upload'].'.'.$ext;

$target = 'profilepics/'.$newname;
if($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg')
{
	die("Please Select a suitable format");
}
if(move_uploaded_file( $_FILES['avatar']['tmp_name'], $target)){
	if(mysqli_query($conn,"UPDATE `user_info` SET `pic` = '$newname' WHERE `username` = '".$_SESSION['pic_upload']."'")){
		header("Location:index.php");
	}
	else{
		die("Something Went Wrong!!");
	}
	
}
else {
	die("Please Try Again!!");
}

?>