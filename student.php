<?php
session_start();
include "connect.php";

if(!isset($_SESSION['student'])){
  header("Location:index.php");
}
if(isset($_POST['logout'])){
  session_destroy();
  mysqli_query($conn,"UPDATE user_info SET active = 0 WHERE username = '".$_SESSION['student']."'");
  header('Location:index.php');
}

// Yeh code hai image display ka
/*$picQ = "SELECT pic from user_info where username='".$_SESSION['student']."'";
$result = mysqli_query($conn,$picQ);
if(mysqli_num_rows($result) > 0){

    $pic = mysqli_fetch_assoc($result);
    $profile = "../profilepics/".$pic["pic"];
}*/
    $pic1 = mysqli_query($conn,"SELECT pic from user_info where username = '".$_SESSION['student']."'");
  $info_user = json_decode($_SESSION["info_user"]);
  
  $pic_name = mysqli_fetch_assoc($pic1);
  // echo $pic_name['pic']; 

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hello , <?php echo $info_user->name; ?></a></li>
            <li>
              <form method="post" >
          		    <button type="submit" class="btn btn-danger" name="logout" method="post">Logout</button>
          	  </form>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Welcome </h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="modal" data-target="#composeModal" aria-haspopup="true" aria-expanded="true">
                Compose
              </button>

            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="well">
              <!-- Image displays here -->
              
              <img src="profilepics/<?=$pic_name['pic']; ?>" class="img-rounded img-responsive">

              <form role="form" action="pic.php" method="post" enctype="multipart/form-data">
                <input id="avatar" name="avatar" type="file" class="file-loading">
                <button type="submit" name="profileUpload" class="btn btn-success"> Upload</button>
              </form>
            </div>
            <div class="list-group">
              <a href="" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <form role="form" method="get">
              <a href="student.php?id=datesheet" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Date Sheet</a>
              <a href="student.php?id=timetable" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Time Table </a>
              <a href="student.php?id=mailbox" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mail </a>
              </form>
            </div>
          </div>

          <div class="col-md-9">
            <?php

                @$id = $_REQUEST['id'];

                if($id == "datesheet"){

                    include_once("datesheet.php");

                }
                if($id == "mailbox"){

                    include_once("inbox.php");

                }
                if($id == "timetable"){

                    include_once("timetable.php");

                }



             ?>
          </div>
        </div>
      </div>
    </section>


    <!-- Modals -->

    <!-- Add User -->
    <div class="modal fade" id="composeModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #5e5e5e;text-align: center;color: white !important;font-size: 30px">
                    <h6 style="font-size: 20px">New Message</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding: 40px 50px">
                    <form role="form" method="post" action="mailsend.php">
                        <div class="form-group">
                            <lable for="to">To: </lable>
                            <input type="text" class="form-control" name="to" required />
                        </div>
                        <div class="form-group">
                            <lable for="subject">Subject: </lable>
                            <input type="text" class="form-control" name="subject" required />
                        </div>
                        <div class="form-group">
                            <lable for="body">Body: </lable>
                            <textarea class="form-control" name="body" cols="40" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success"  type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
