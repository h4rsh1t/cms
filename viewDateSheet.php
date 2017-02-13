<?php
session_start();
include "connect.php";

$sql = "SELECT filename FROM datesheet";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $file = "uploads/dateSheet/".$row["filename"];

    header('Content-type: application/pdf');
    header('Content-Dispostion: inline; filename="'.$row["filename"].'"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);

    

}

?>