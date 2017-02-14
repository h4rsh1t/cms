<html>
<head>
    <title>
        Welcome
    </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:#eee">

<?php
include 'connect.php';
session_start();

$id = @$_GET['id'];
/*echo($_GET['id']);
die(".");*/

if(!isset($id)) {
   header('location: inbox.php');
}
elseif(isset($id)) {
  $m = "mail_".$_SESSION["student"];

  $grab_pm = mysqli_query($conn,"SELECT * FROM mail_all WHERE sr_no = '".$id."'");

  if(mysqli_num_rows($grab_pm) > 0){

	   while($r= mysqli_fetch_assoc($grab_pm)) {
          //$_SESSION['rec'] = $r['reciever'];
          //$_SESSION['subj'] = $r['subject'];
  		   echo "<p>From: ".$r['sender']."</p>";
   		    echo "<p>Subject : ".$r['subject']."</p>";
   		     echo "<p>Message : ".$r['content']."</p>";
   	 }
   }
}

/*if(isset($_POST['reply'])){

  $to = "mail_".$_SESSION['rec'];
  $sub = "RE: ".$_SESSION['subj'];
  $msg = $_POST['replyMessage'];
  $reply = "INSERT INTO $to VALUES(NULL,'".$_SESSION['student']."','inbox','$sub','$msg',NULL)";
  if(mysqli_query($conn,$reply)){
    die('Success');
  }
  else{
    die("not Sent");
  }

}*/

?>
<form method="POST" action="">
  <textarea name="replyMessage"></textarea>
  <button type="submit" name="reply" class="btn btn-success">Reply</button>
  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
</form>

</body>
</html>
