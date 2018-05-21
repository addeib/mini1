
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN | ADMIN</title>
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
	width: 400px;
	height: 250px;
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
	</style>
</head>

<center>
<body>

<?php
if (isset($_SESSION['ERRMSG_ARR']))
{
	echo "h1 style= 'color:red'>Error found:";
	for ($i=0; $i<count($_SESSION['ERRMSG_ARR']);$i++){
		echo $_SESSION['ERRMSG_ARR'][$i]."! ";
	}
	echo "</h1>";
	unset($_SESSION['ERRMSG_ARR']);
}
?>

	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>LOGIN</h1></marquee>

	<hr>
	
	<ul>
  <li><a href="homepage.php">HOME</a></li>
  <li><a href="contact.php">CONTACT US</a></li>
  <li><a href="privacy.php">PRIVACY POLICY</a></li>
  <li><a href="aboutus.php">ABOUT US</a></li>
  <li><a href="faq.php">FAQs</a></li>
  <li><a href="admin_login.php">ADMIN</a></li>

  <li style="float:right"><a class="active" href="login.php">LOGIN</a></li>
</ul>
	<hr>
	
	&nbsp; <br>
	
	<hr>
<div class="aa">
<h2>Admin Login</h2>
<form method ="post" action="admin_checklogin.php">

	<input type="text" required autocomplete="off" placeholder="Please Enter Username..." name="username">
	<br><br>
	<input type="password" required autocomplete="off" placeholder="Please Enter Password..."name="password"><br><br>
	<input type="submit" value="Login">
	
	
</form>

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