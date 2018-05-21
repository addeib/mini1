<?php
include("database.php");

$idURL = $_GET['id'];

$query = "DELETE FROM pro WHERE id = '$idURL'";
$result = mysql_query($query, $conn);

if($result) {
echo  "<script type='text/javascript'> window.location='admin_user_info.php' </script>";
}

?>