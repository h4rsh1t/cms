<?php
include "../connect.php";

    $sql = mysqli_query($conn,"SELECT * FROM to_do_all WHERE id = 'admin'");


?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<body>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="panel-title">To Do List</h3>
                </div>
                <div class="col-md-6">
                    <div class="dropdown create">
                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="modal" data-target="#addTask">
                            Add Task
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <tr>
                <th>#</th>
                <th>From</th>
                <th>Subject</th>
            </tr>
            <?php
            if(mysqli_num_rows($sql) > 0){
                $i = 1;
                while ($row = mysqli_fetch_assoc($sql)) {

                    echo "<tr>";
                    echo "<td>".$i."</td>"; //row[1] = name
                    echo "<td>".$row['name']."</td>"; //row[0] = username
                    echo "<td><a href='viewTask.php?id=".$row['sr_no']."'>".$row['desc']."</a></td>"; //row[2] = timestamp
                    echo "</tr>";
                    $i++;
                }
            }

            ?>
        </table>
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
