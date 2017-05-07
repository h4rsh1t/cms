<?php

    /*if(isset($_POST['viewNotes'])){
        header("location:notes/");
        //header("location:n_test.php");
        //header("location:directory.php");
    }*/

    if(isset($_POST['upload'])){

        $sub = $_POST['subject'];
        $target_dir = "notes/";
        $target_file = $target_dir."/".$sub."/".basename($_FILES['file']['name']);


        if(is_dir($target_dir)){

        }
        else{
             mkdir($target_dir);
        }

        if(is_dir($target_dir."/".$sub."/")){

        }else{
            mkdir($target_dir."/".$sub."/");
        }

        if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)) {

        }

    }




?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Time Table</title>
    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>

<form role="form" method="post" action="directory.php">
    <div class="form-group">
        <button name="viewNotes" class="btn btn-info" type="submit">View</button>
    </div>
</form>

<form role="form" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="subject">Subject</label>
        <input class="form-control" type="text" name="subject">
        <input type="file" name="file">
    </div>

    <div class="form-group">
        <button name="upload" class="btn btn-info" type="submit">Upload</button>
    </div>
</form>








<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
