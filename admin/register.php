<?php
  include "../connect.php";

    if($_POST['psw']===$_POST['Rpsw']){
      $sql1 = "INSERT INTO login VALUES('".$_POST['username']."','".md5($_POST['psw'])."','faculty')";
      if(mysqli_query($conn,$sql1)){
        header('Location:admin.php');
      }


  }



 ?>
