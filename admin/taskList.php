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
        <h3 class="panel-title">Mail Box</h3>
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
















<script>
    CKEDITOR.replace( 'editor1' );

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
