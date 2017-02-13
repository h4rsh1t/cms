<?php
include "connect.php";
session_start();
$mailId="mail_13csu120";
$result = mysqli_query($conn,"SELECT * FROM ".$mailId);

if(isset($_POST['deleteItem']) and is_numeric($_POST['deleteItem']))
{

     $delete = $_POST['deleteItem'];
     $sql = "DELETE FROM ".$mailId." where id = '$delete'";
    mysqli_query($conn,$sql);


}

echo '<form action="" method="post">';
echo "<table border='0'>
<tr>
<th>From</th>
<th>Type</th>
<th>Subject</th>
<th>Content</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['rec_id'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>".$row['content']."</td>";
    echo '<td><input type="submit" name="deleteItem" value="'.$row['id'].'" /></td>"';
  echo "</tr>";
  }
echo "</table>";
echo "</form>"


?>