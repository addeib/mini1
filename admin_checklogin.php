<?php

$username=$_POST['username'];
$password=$_POST['password'];

if ($username==("admin") & $password==("admin") ) {

	
	header("location: admin.php");
		exit();
	}
	else {
	echo "<script> window.location='admin_login.php' </script>";
}

	
	?>