<!DOCTYPE html>

<?php
		include("database.php");
		
		$idURL = $_GET['id'];
		
		$query = "SELECT * FROM pro WHERE id = '$idURL'";
		$result = mysql_query($query, $conn) or die ("Could not execute query in update_user.php");
		$row = mysql_fetch_array($result, MYSQL_BOTH); //using numeric or array index

			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$username = $row["username"];
			$password = $row["password"];
			
			@mysql_free_result($result);
			?>
			
<html>
<head>
	<title>UPDATE USER | ADMIN</title>
	<style type="text/css">
	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 30px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
	
	
	

	body{
	//background-image: url(nice-background.jpg);
	//background-size: cover;
	
}
.aa{
	width: 600px;
	height: 450px;
	background-color: rgba(0,0,0,0.5);
	margin:0 auto;
	margin-top:40px;
	padding-top: 10px;
	padding-left: 50px;
	border-radius: 15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight: bolder;
	box-shadow: inset -4px -4px rgba(0,0,0,0.5);
	font-size: 18px;
	
}
.aa input[type="text"]{
	width: 300px;
	height: 35px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
	padding-left: 5px;
}
.aa input[type="password"]{
	width: 300px;
	height: 35px;
	padding-left: 5px;
	border:0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
}
.aa input[type="submit"]{
	width: 100px;
	height: 35px;
	border: 0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
	background-color: skyblue;
	font-weight: bolder;
}
.aa input[type="reset"]{
	width: 100px;
	height: 35px;
	border: 0;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
	background-color: skyblue;
	font-weight: bolder;
}

	</style>
</head>

<center>
<body>

	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>SIGN UP NOW~ ITS FREE !</h1></marquee>

	
	<hr>
	<ul>
  
  <li><a href="admin_user_info.php">USER INFORMATION</a></li>
  <li><a href="admin_listidea.php">LIST IDEA</a></li>
  <li><a href="admin.php">ADMIN</a></li>
  <li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
  
</ul>
	
	
	&nbsp; <br>
	
<div class="aa">
<h2>UPDATE</h2>
<form method="post" action="kemaskini.php">

	First name: <input type="text" required autocomplete="off" value="<?php echo $firstname; ?> " name="firstname"><br><br>
	Last name:  <input type="text" required autocomplete="off" value="<?php echo $lastname; ?>" name="lastname"><br><br>
	Username:   <input type="text" required autocomplete="off" value="<?php echo $username; ?>" name="username"><br><br>
	Password:   <input type="text" required autocomplete="off" value="<?php echo $password; ?>" name="password"><br><br>
	<input type="hidden" name="id" value="<?php echo $idURL; ?>">
	<center><input type="submit" value="UPDATE">
	<input type="reset" value="RESET"></center>
	
</form>
 <br><br>
	<div align="center"><a href="admin_user_info.php">Back to User Information</a>
	</div>
</div>
&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	<hr>
	Copyright &copy 2016 All Right Reserved
	<hr>
</body>
</html>