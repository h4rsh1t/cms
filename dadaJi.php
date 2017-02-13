<?php
include "connect.php";
session_start();
if(isset($_POST['admin'])){
    $row = mysqli_fetch_assoc(mysqli_query($conn,"select memberType from login where username ='".$_POST['a_username']."'AND password = '".md5($_POST['a_password'])."'"));

    if($row['memberType'] == "admin"){
        header('location:baap.php');
        $_SESSION["admin"] = $_POST["a_username"];

    }
    else{
        header('location:dadaJi.php');
    }

}
?>
<html>
<body>

<form method="post">
    <input name="a_username" placeholder="username">
    <input name="a_password" placeholder="password">
    <button type="submit" name="admin">Submit</button>
</form>
</body>
</html>