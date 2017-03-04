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
<section id="main">
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
<script>
    CKEDITOR.replace( 'editor1' );
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
