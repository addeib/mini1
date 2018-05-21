<?php
$username=$_SESSION['username'];

$sql = "SELECT username FROM pro WHERE username ='$username'";
$result2 = mysql_query($sql);
$row3 = mysql_fetch_array($result2);
$user = $row3['username'];
@mysql_free_result($result2);
?>