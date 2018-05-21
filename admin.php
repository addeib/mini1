<?php
	session_start();
	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
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
    background-color: #FF0000;
}
	
	
	
	

	body{
	//background-image: url(nice-background.jpg);
	//background-size: cover;
	
}
.aa{
	width: 400px;
	height: 250px;
	background-color: rgba(0,0,0,0.5);
	margin:0 auto;
	margin-top:40px;
	padding-top: 10px;
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
	</style>
</head>

<center>
<body>

	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>Admin Page ~</h1></marquee>

	<hr>
	
	<ul>
  <li><a href="admin_user_info.php">USER INFORMATION</a></li>
  <li><a href="admin_listidea.php">LIST IDEA</a></li>
  <li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
</ul>
	<hr>
	
	&nbsp; <br>
	
	<hr>
<div class="aa">
<h2>WELCOME ADMIN</h2>

	<?php
	date_default_timezone_set('Asia/Kuala_Lumpur');
	
	?>
	
	<center>DATE : <?php echo date("d-m-Y"); ?></center>
	<br>
	<center>TIME : <?php echo date("H:i", time()); ?></center>
	
	
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