<?php

include "../connect.php";
if(isset($_POST['timetable'])) {

    $sem = $_POST['semester'];
    $branch = $_POST['branch'];
    $section = $_POST['section'];

    $target_dir = "../uploads/timeTable/";
    $target_dir1 = $target_dir . $sem . "/" . $branch . "/" . $section . "/";
    $target_file = $target_dir1 . basename($_FILES["tTable"]["name"]);
    if (is_dir($target_dir)) {
    } else {
        mkdir($target_dir);
    }

    if (is_dir($target_dir . $sem . "/")) {
    } else {
        mkdir($target_dir . $sem . "/");
    }

    if (is_dir($target_dir . $sem . "/" . $branch . "/")) {
    } else {
        mkdir($target_dir . $sem . "/" . $branch . "/");
    }

    if (is_dir($target_dir . $sem . "/" . $branch . "/" . $section . "/")) {
    } else {
        mkdir($target_dir . $sem . "/" . $branch . "/" . $section . "/");
    }


    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["tTable"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }


    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES['tTable']["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "txt"
    ) {
        echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['tTable']["tmp_name"], $target_file)) {
            $sql = "INSERT INTO uploads VALUES(NULL,$sem,'$branch','$section','" . basename($_FILES["tTable"]["name"]) . "','student')";
            $sql1 = "SELECT filename FROM uploads WHERE sem=$sem AND branch='$branch'  AND sectio='$section' AND memberType='student'";
            $sql2 = "UPDATE uploads SET filename = '" . basename($_FILES["tTable"]["name"]) . "' WHERE sem=$sem AND branch='$branch'  AND sectio='$section' AND memberType='student'";
            $result = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result) > 0) {
                mysqli_query($conn, $sql2);
                $_SESSION['updatett'] = "OK";
                header('Location:admin.php');
            } else {
                mysqli_query($conn, $sql);
                $_SESSION['uploadtt'] = "OK";
                header("location:admin.php");
            }

        } else {
            $_SESSION['errortt'] = "OK";
            header('Location:admin.php');
            //echo "Sorry, there was an error uploading your file.";
        }
    }
}

if(isset($_POST['datesheet'])) {

    $target_dir = "../uploads/dateSheet/";
    $target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if (is_dir($target_dir)) {
    } else {
        mkdir($target_dir);
    }

// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "txt"
    ) {
        echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $sql = "UPDATE datesheet SET filename='" . basename($_FILES["fileToUpload"]["name"]) . "' WHERE id = 1";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['updateds'] = "OK";
                header('Location:admin.php');
            }
        } else {
            $_SESSION['errords'] = "OK";
            //echo "Sorry, there was an error uploading your file.";
            header('Location:admin.php');
        }
    }

}
?>
