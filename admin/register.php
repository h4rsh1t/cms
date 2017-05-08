<?php
  include "../connect.php";

    if($_POST['psw']===$_POST['Rpsw']){
      $sql1 = "INSERT INTO login VALUES('".$_POST['username']."','".md5($_POST['psw'])."','faculty')";
        mysqli_query($conn,"insert into user_info values('".$_POST['username']."','".$_POST['fullName']."',NULL,NULL,0,'default.png')");

        if(mysqli_query($conn,$sql1)){
        header('Location:admin.php');
      }


  }



 ?>
