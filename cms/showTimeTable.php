<?php
include "connect.php";
session_start();
$sem = $_POST['semester'];
$branch = $_POST['branch'];
$section = $_POST['section'];


$sql = "SELECT filename FROM uploads WHERE sem=$sem AND branch='$branch'  AND sectio='$section' AND memberType='student'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    $file = "uploads/timeTable/".$sem."/".$branch."/".$section."/" . $row["filename"];
    //echo $file;
    header('Content-type: application/pdf');
    header('Content-Dispostion: inline; filename="'.$row["filename"].'"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);

}
?>