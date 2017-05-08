<?php
include "../connect.php";
session_start();
if(!isset($_SESSION['admin'])) {
    header('location:index.php');
}
if(isset($_POST['logout'])) {
    session_destroy();
    header('location:index.php');
}

if(isset($_SESSION['uploadtt'])) {
    echo "<script> alert('Time Table Uploaded Successfuly!');</script>";
    $_SESSION['uploadtt'] = "";
}

if(isset($_SESSION['updatett'])){
    echo "<script> alert('Time Table Updated Successfuly!');</script>";
    $_SESSION['updatett']="";
}

if(isset($_SESSION['errortt'])) {
    echo "<script> alert('Something went wrong!! Please try again.!');</script>";
    $_SESSION['errortt']="";
}


if(isset($_SESSION['updateds'])){
     echo "<script> alert('Date Sheet Uploaded Successfuly!');</script>";
    $_SESSION['updateds']="";
}

if(isset($_SESSION['errords'])) {
    echo "<script> alert('Something went wrong!! Please try again.!');</script>";
    $_SESSION['errords']="";
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Dashboard</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome</a></li>
            <li>
              <form role="form" action="" method="post">
                <button type="submit" class="btn btn-danger" name="logout"> Logout</button>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addUser">Add User</a></li>
                <li><a type="button" data-toggle="modal" data-target="#addTask">Add Task</a></li>
              </ul>
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
              <img src="vfv.jpg" class="img-rounded img-responsive" />
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <input id="avatar" name="avatar" type="file" class="file-loading">
                <button type="submit" name="profileUpload" class="btn btn-success"> Upload</button>
              </form>
            </div>
            <div class="list-group">
              <a href="admin.php?id=dash" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="admin.php?id=datesheet" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Date Sheet</a>
              <a href="admin.php?id=timetable" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Time Table </a>
              <a href="admin.php?id=mailbox" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mail </a>
              <a href="admin.php?id=toDoList" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> To Do List </a>
            </div>
          </div>
          <div class="col-md-9">

              <?php
              @$id = $_REQUEST['id'];
              if($id == "datesheet"){
                  include_once("uploadDs.php");
              }
              if($id == "mailbox"){
                  include_once("inbox.php");
              }
              if($id == "timetable"){
                  include_once("uploadTt.php");
              }
              if($id == "dash"){
                  include_once("dash.php");
              }
              if($id == "toDoList"){
                  include_once("taskList.php");
              }
              ?>

          </div>
        </div>
      </div>
    </section>


    <!-- Modals -->

    <!-- Add User -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Faculty</h4>
          </div>
          <div class="modal-body">
            <form role="form" action="register.php" method="post">
              <div class="form-group">
                  <label for="fullName"><span class="glyphicon glyphicon-user"></span> Name</label>
                  <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
              </div>
              <div class="form-group">
                  <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter College Id" required>
              </div>
              <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="password" class="form-control" name="psw" placeholder="Enter password" required>
              </div>
              <div class="form-group">
                  <label for="Rpsw"><span class="glyphicon glyphicon-eye-open"></span> Retype Password</label>
                  <input type="password" class="form-control" name="Rpsw" placeholder="Re-enter password" required>
              </div>

              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Sign Up</button>

            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Task</h4>
                </div>
                <div class="modal-body">
                    <form role="form" action="addTask.php" method="post">
                        <div class="form-group">
                            <label for="taskName">Task Name</label>
                            <input type="text" class="form-control" name="taskName" placeholder="Enter Task Name" required>
                        </div>
                        <div class="form-group">
                            <lable for="body">Body: </lable>
                            <textarea class="form-control" name="body" cols="40" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"> Add Task</button>

                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
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
