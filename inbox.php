<html>
<head>
    <title>
        Welcome
    </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "connect.php";

session_start();

//$m = "mail_".$_SESSION["student"];


$sql = mysqli_query($conn,"SELECT * FROM mail_all WHERE reciever = '".$_SESSION['student']."'");

echo "<table width='95%'>
<tr><th>#</th><th>From</th><th>Subject</th></tr>";

if(mysqli_num_rows($sql) > 0){
    $i=1;

	while($r = mysqli_fetch_assoc($sql)) {

		echo "<tr><td>".$i."</td><td>".$r['sender']."</td><td><a href='view.php/?id=".$r['sr_no']."'>".$r['subject']."</a></td></tr>";
        $i++;

	}
}
else{

	die("0 result");
}

echo "</table>";

?>
</body>
</html>
