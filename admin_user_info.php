<html>
<head>
<title>USER INFORMATION | ADMIN</title>
<style>
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
</style>
</head>

<body>
	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>Admin Page ~</h1></marquee>
	
	<hr>
	
	<ul>
  <li><a href="admin_user_info.php">USER INFORMATION</a></li>
  <li><a href="admin_listidea.php">LIST IDEA</a></li>
  <li><a href="admin.php">ADMIN</a></li>
  <li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
</ul>
	<hr>

	&nbsp; <br>
		
		
			
			<table width="60%" border="1" align="center">
         <tr>
            <td width="9%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>ID</strong></div></td>
    <td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>FIRSTNAME</strong></div></td>
    <td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>LASTNAME</strong></div></td>
	<td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>USERNAME</strong></div></td>
	<td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>PASSWORD</strong></div></td>
    <td width="22%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>UPDATE / DELETE</strong></div></td>
         </tr>
		 
		 <?php
		include("database.php");
		
		$query = "SELECT * FROM pro";
		$result = mysql_query($query, $conn);

			while($row = mysql_fetch_array($result)) {
			$id = $row["id"];
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$username = $row["username"];
			$password = $row["password"];
			?>
			
	   		  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center"><?php echo $id; ?></div></td>
            <td class="style3">&nbsp;<?php echo $firstname ?></td>
            <td class="style3"><div align="center"><?php echo $lastname ?></div></td>
			<td class="style3"><div align="center"><?php echo $username ?></div></td>
			<td class="style3"><div align="center"><?php echo $password ?></div></td>
            <td class="style3"><div align="center">&nbsp;<a href="update_user.php?id=<?php echo $id; ?>">UPDATE</a>/ <a href="delete_user.php?id=<?php echo $id; ?>">DELETE</a></div></td>
         </tr>
		<?php	
		}
		?>
	</table>
	
	
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	&nbsp; <br>
	<hr>
	<center>Copyright &copy 2016 All Right Reserved
	<hr>
</body>
</html>