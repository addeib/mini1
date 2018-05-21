<! -- kemaskini.php -->
<! -- to update data of update_user into database. -- >

<?php
include("database.php");

extract( $_POST );

//Dapatkan tarikh dan masa masuk
$tarikh = date("d-m-Y",time());
$masa = date("H:i:s", time());

$query = "UPDATE pro SET firstname = '$firstname', lastname = '$lastname', username = '$username', password = '$password' WHERE id = '$id' ";

$result = mysql_query($query, $conn) or die ("Could not execute query in kemaskini.php");
if($result) {
echo "<script type='text/javascript'> window.location='user_info.php' </script>";
}

?>