<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
         <!--
            // Form validation code will come here.
         //-->
      </script>

	<title>SIGN UP</title>
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
	</style>
</head>

<center>
<body>

	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>SIGN UP NOW~ ITS FREE !</h1></marquee>

	
	<hr>
	<ul>
  
  <li><a href="homepage.php">HOME</a></li>
  <li><a href="contact.php">CONTACT US</a></li>
  <li><a href="privacy.php">PRIVACY POLICY</a></li>
  <li><a href="aboutus.php">ABOUT US</a></li>
  <li><a href="faq.php">FAQs</a></li>
  <li style="float:right"><a class="active" href="login.php">LOGIN</a></li>
  
</ul>
	<hr>

	<a href="signup.php"></a>
	
	&nbsp; <br>
	
	<hr>
<div class="aa">
<h2>SIGN UP</h2>
<form method="post" name="myForm"action="isikan.php" id="myForm" onsubmit="return(validate());" >

	First name: <input type="text" placeholder="Please Enter First name..." name="firstname" id="firstname"><br><br>
	Last name:  <input type="text"  placeholder="Please Enter Last name..." name="lastname" id="lastname"><br><br>
	Username:   <input type="text"  placeholder="Please Enter Username..." name="username" id="username" ><br><br>
	Password:   <input type="password"  placeholder="Please Enter Password..." name="password" id="password" ><br><br>
	Retype:     <input type="password"  placeholder="Please Retype Password..." name="password_confirmation" id="password_confirmation" ><br><br>
	<center><input type="submit" value="SIGN UP"></center>
	
</form>

<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.firstname.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         
         if( document.myForm.lastname.value == "" )
         {
            alert( "Please provide your lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         if( document.myForm.username.value == "" )
         {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }
         if( document.myForm.password.value == "" )
         {
            alert( "Please provide your password!" );
            document.myForm.password.focus() ;
            return false;
         }
		 if( document.myForm.password_confirmation.value == "" )
         {
            alert( "Please retype your password!" );
            document.myForm.password_confirmation.focus() ;
            return false;
         }
         
         
         return( true );
      }
   //-->
</script>



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