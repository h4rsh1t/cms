<?php
include "../connect.php";


    $sql1 = "INSERT INTO to_do_all VALUES('admin','".$_POST['taskName']."','".$_POST['body']."')";
    if(mysqli_query($conn,$sql1)){
        header('Location:admin.php');
    }






?>
