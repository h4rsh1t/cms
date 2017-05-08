<?php
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:index.php');
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <li><a href="#">Welcome </a></li>
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
                    <!-- Image displays here -->
                    <?php //echo '<img src="'.$profile.'"class="img-rounded img-responsive" />';?>
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <input id="avatar" name="avatar" type="file" class="file-loading">
                        <button type="submit" name="profileUpload" class="btn btn-success"> Upload</button>
                    </form>
                </div>
                <div class="list-group">
                    <a href="admin.php?id=dash" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <form role="form" method="get">
                        <a href="admin.php?id=datesheet" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Date Sheet</a>
                        <a href="admin.php?id=timetable" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Time Table </a>
                        <a href="admin.php?id=mailbox" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mail </a>
                        <a href="admin.php?id=toDoList" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> To Do List </a>
                    </form>
                </div>
            </div>

            <div class="col-md-9">

                <?php
                include '../connect.php';
                session_start();

                $id = @$_GET['id'];
                /*echo($_GET['id']);
                die(".");*/


                $grab_pm = mysqli_query($conn,"SELECT * FROM to_do_all WHERE sr_no = '".$id."'");

                if(mysqli_num_rows($grab_pm) > 0){

                    while($r= mysqli_fetch_assoc($grab_pm)) {

                        $_SESSION['subj'] = $r['name'];

                        echo "<p>Task Name : ".$r['name']."</p>";
                        echo "<p>Content : ".$r['desc']."</p>";
                    }
                }



                if(isset($_POST['delete'])){
                    $delete = "DELETE FROM to_do_all WHERE sr_no = $id";
                    if(mysqli_query($conn,$delete)){
                        header('Location:admin.php?id=mailbox');
                    }
               }



                ?>
                <form method="POST" action="">
                    <button type="submit" name="delete" class="btn btn-success">Complete</button>
                </form>
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
