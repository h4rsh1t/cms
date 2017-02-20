<?php
include "../connect.php";
$s = mysqli_query($conn,"SELECT * from login where memberType='student'");
$f = mysqli_query($conn,"SELECT * from login where memberType='faculty'");
$faculty = mysqli_num_rows($f);
$student = mysqli_num_rows($s);
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
<?php
$sql = "SELECT username,name,max(time) from login_log GROUP by username order by time desc";
$info1 = mysqli_query($conn,$sql);
$sql = "select * from user_info where active= 1";
$info2 = mysqli_query($conn,$sql);
$active_users = mysqli_num_rows($info2);

?>
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
            <li><a href="index.php">Logout</a></li>
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
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a type="button" data-toggle="modal" data-target="#addDatesheet" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Date Sheet</a>
              <a type="button" data-toggle="modal" data-target="#addTimetable" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Time Table </a>
              <a type="button" data-toggle="modal" data-target="#mailBox" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Mail </a>
            </div>
          </div>
          <div class="col-md-9">

            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $student; ?></h2>
                    <h4>Student</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $faculty;?></h2>
                    <h4>Faculty</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $active_users;?></h2>
                    <h4>Active Users</h4>
                  </div>
                </div>
                </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                      </tr>
                      <?php
                      while ($row = mysqli_fetch_row($info1)) {
                        echo "<tr>";
                        echo "<td>".$row[1]."</td>"; //row[1] = name
                        echo "<td>".$row[0]."</td>"; //row[0] = username
                        echo "<td>".$row[2]."</td>"; //row[2] = timestamp
                        echo "</tr>";
                      }
                      ?>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Shubham Bansal, &copy; 2017</p>
    </footer>

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
    <!--
    <div class="modal-fade" id="addDatesheet" tabindex="-1" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-fade" id="addTimetable" tabindex="-1" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-fade" id="mailBox" tabindex="-1" role="dialog" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>-->

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
