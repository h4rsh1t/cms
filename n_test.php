<?php
$msg = "";
if($handle = opendir('notes/')){
 while (false !== ($file = readdir($handle))) {
 if (($file != ".")
 && ($file != "..")) {
 $msg .= '<li><a href="../download.php?file='.$file.'">'.$file.'</a></li>';
 }
 }
 closedir($handle);
}
?>
<!doctype html>
<html>
<head>
<title>SoftAOX | List files and directories inside the specified path in PHP</title>
</head>
<body>
<h2>List files and directories inside the specified path in PHP</h2>
<p>List of files:</p>
<ul>
<p><?php echo $msg ?></p>
</ul>
</body>
</html>