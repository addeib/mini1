<?php

//start session
session_start();

//validation error flag
$errflag = false;

//input validations
if ($_POST['username'] == '') {
$errmsg_arr[] = 'wrong username';
$errflag = true;
}

if ($_POST['password'] == '') {
$errmsg_arr[] = 'wrong password';
$errflag = true;
}

//if there are input validation, redirect back to the login form
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: login.php");
exit();
}

//to make a connection with database
$conn = mysql_connect("localhost","atiqah","atiqah") or die(mysql_error());

//to select the targeted database
mysql_select_db("project", $conn) or die(mysql_error());

//to create a query to be execute in sql
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM pro WHERE username = '$username' AND password = '$password'";

//to run sql query in database
$result = mysql_query($query, $conn) or die(mysql_error());

//check whether the query was successful or not
if(isset($result)) {
	if(mysql_num_rows($result) == 1) {
		//login successful
		session_regenerate_id();
		$member = mysql_fetch_assoc($result);
		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
		$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
		$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
		$_SESSION['STATUS'] = true;
		session_write_close();
		header("location: homepage2.php");
		exit();
	}
	else {
		//login failed
		header("location: login.php");
		exit();
	}
}
else {
	die("Query failed");
}

?>