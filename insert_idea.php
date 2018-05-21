<!DOCTYPE html>
<html>
<head>
	<title>INSERT IDEA</title>
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
	width: 600px;
	height: 700px;
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

	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>GIVE IDEA</h1></marquee>

	
	<hr>
	<ul>
  
  <li><a href="homepage2.php">HOME</a></li>
  <li><a href="faculty.php">FACULTY</a></li>
  <li><a href="contact2.php">CONTACT US</a></li>
  <li><a href="privacy2.php">PRIVACY POLICY</a></li>
  <li><a href="aboutus2.php">ABOUT US</a></li>
  <li><a href="faq2.php">FAQs</a></li>
  <li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
  
</ul>
	<hr>

	
	
	&nbsp; <br>
	
	<hr>
<div class="aa">
<h2>GIVE YOUR IDEA</h2>
<form method="post" action="isikan_idea.php">

	Faculty : 
	<input type="radio" required autocomplete="off" name="faculty" value="fskkp">FSKKP&nbsp
	<input type="radio" required autocomplete="off" name="faculty" value="fkksa">FKKSA
	<input type="radio" required autocomplete="off" name="faculty" value="fkasa">FKASA
	<input type="radio" required autocomplete="off" name="faculty" value="fkee">FKEE
	<input type="radio" required autocomplete="off" name="faculty" value="fist">FIST<br>
	&nbsp; &nbsp; &nbsp; &nbsp; 
	<input type="radio" required autocomplete="off" name="faculty" value="fkp">FKP
	<input type="radio" required autocomplete="off" name="faculty" value="fkm">FKM
	<input type="radio" required autocomplete="off" name="faculty" value="ftek">FTEK
	<input type="radio" required autocomplete="off" name="faculty" value="fim">FIM
	<br><br>
	Title: <input type="text" required autocomplete="off"  name="title"><br><br>
	Description :
	<textarea name="description" required autocomplete="off" rows="10" cols="50" ></textarea><br><br>
	Link: <input type="text" required autocomplete="off"  name="link"><br><br>
	Project:   <input type="text" required autocomplete="off" name="project"><br><br>
	Your Name:   <input type="text" required autocomplete="off" name="uploader"><br><br>
	Tags:   <input type="text" required autocomplete="off" name="tags"><br><br>
	<center><input type="submit" value="SUBMIT"></center>
	
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