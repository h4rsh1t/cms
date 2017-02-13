<html>
<head>
    <title>
        Welcome
    </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>


</head>
<body>
<div class="container">

    <form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <a data-toggle="modal" href="#signUpModal">New User ?</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
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
</div>
</body>
</html>