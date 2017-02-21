<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Home</a>
          <a class="navbar-brand" data-toggle="modal" href="#signUpModal">Sign Up</a>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Members Area</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="login.php" method="post" class="well">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="inputEmail" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="inputPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-default btn-block" name="login">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="signUpModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-user"></span> Sign Up</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="register.php">
                        <div class="form-group">
                            <label for="fullName"><span class="glyphicon glyphicon-user"></span> Name</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter College Id" required>
                        </div>
                        <div class="form-group">
                            <label for="stream"><span class="glyphicon glyphicon-user"></span> Stream</label>
                            <input type="text" class="form-control" name="stream" placeholder="Stream" required>
                        </div>
                        <div class="form-group">
                            <label for="semester"><span class="glyphicon glyphicon-user"></span> Semester</label>
                            <input type="tel"  maxlength="1" size="1" class="form-control" name="semester" placeholder="Semester" required>
                        </div>
                        <div class="form-group">
                            <label for="section"><span class="glyphicon glyphicon-user"></span> Section</label>
                            <input type="text" class="form-control" name="section" placeholder="Section" required>
                        </div>
                        <div class="form-group">
                            <label for="phone"><span class="glyphicon glyphicon-phone"></span> Phone</label>
                            <input type="tel" maxlength="10" size="10" class="form-control" name="phone" placeholder="Mobile" required>
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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
