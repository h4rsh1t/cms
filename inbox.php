<?php
include "connect.php";

session_start();

$m = "mail_".$_SESSION["student"];


$sql = mysqli_query($conn,"SELECT * FROM $m WHERE type='inbox'");

echo "<table width='95%'>
<tr><th>From</th><th>Subject</th></tr>";

if(mysqli_num_rows($sql) > 0){

	while($r = mysqli_fetch_assoc($sql)) {
		
		echo "<tr><td>".$r['rec_id']."</td><td><a href='view.php/?id=".$r['id']."'>".$r['subject']."</a></td></tr>"; 


	}
}
else{

	die("0 result");
}	

echo "</table>";

?>