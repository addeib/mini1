<!-- isikan_idea.php -->
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

			$id = $_POST["id"];
			$faculty = $_POST["faculty"];
			$title = $_POST["title"];
			$description = $_POST["description"];
			$link = $_POST["link"];
			$project = $_POST["project"];
			$uploader = $_POST["uploader"];
			$tags = $_POST["tags"];

$sql = "INSERT INTO idea (faculty,title,description,link,project,uploader,tags) VALUES ('$faculty','$title','$description','$link','$project','$uploader','$tags')";

if ($conn->query($sql) === TRUE) {
	echo "<script> window.location='faculty.php' </script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>