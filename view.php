<?php
include "connect.php";
session_start();

$id = @$_GET['id'];

if(!isset($id)) {
   header('location: inbox.php');
}
elseif(isset($id)) {
$m = "mail_".$_SESSION["student"];

$grab_pm = mysqli_query($conn,"SELECT * FROM $m WHERE id = '$id'");

if(mysqli_num_rows($grab_pm) > 0){

	while($r= mysqli_fetch_assoc($grab_pm)) {
   
  		echo "<p>From: ".$r['rec_id']."</p>";
   		echo "<p>Subject : ".$r['subject']."</p>";
   		echo "<p>Message : ".$r['content']."</p>";
   	}	

 
}

}
?>