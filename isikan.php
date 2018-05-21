<!-- isikan.php -->
<!-- to insert data of sign_up.php inti database. -->


<?php
$servername = "localhost";
$username = "atiqah";
$password = "atiqah";
$dbname = "project";

//create connection 
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$sql = "INSERT INTO pro (firstname,lastname,username,password,password_confirmation) VALUES ('$firstname','$lastname','$username','$password','$password_confirmation')";

	
if ($conn->query($sql) === TRUE) {
	echo "<script> window.location='homepage.php' </script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

