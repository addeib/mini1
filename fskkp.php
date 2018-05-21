<html>
<head>
<title>FSKKP</title>
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

.style3 {
	font-size: 10px ;
	font-family:verdana, helvetica, sans-serif;
	}
.style5 {
	color: #000000;
	font-weight: bold;
}

</style>
</head>


<center>
<body>


	
	<img src="pic/ump.png" width="100px" height="100px" align="left"><br>
	<img src="pic/idea.png" width="100px" height="100px" align="left"><br>
	<marquee><h1>Faculty of Computer System & Software Engineering</h1></marquee>
	
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
	
	<h2>Get Latest Final Year Projects</h2>

	<p>Our mission is to ensure all community in University Malaysia Pahang can contribute their idea.</p>
	
	<a href="insert_idea.php">Submit Your Idea</a>
	<br>
	&nbsp; <br>
	<table width="60%" border="1" align="center">
    
         <tr>
            <td width="9%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>No</strong></div></td>
    <td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>FACULTY</strong></div></td>
    <td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>TOTAL</strong></div></td>
    <td width="22%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>View</strong></div></td>
         </tr>
		 
		 
	   		  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">1</div></td>
            <td class="style3">&nbsp;COMPUTER SYSTEM & SOFTWARE ENGINEERING</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fskkp'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fskkp.php">View</a></div></td>
         </tr>
       			  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">2</div></td>
            <td class="style3">&nbsp;CHEMICAL & NATURAL RESOURCES ENGINEERING</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fkksa'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fkksa.php">View</a></div></td>
         </tr>
       			  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">3</div></td>
            <td class="style3">&nbsp;CIVIL ENGINEERING & EARTH RESOURCES</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fkasa'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fkasa.php">View</a></div></td>
         </tr>
		 <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">4</div></td>
            <td class="style3">&nbsp;ELECTRICAL & ELECTRONICS ENGINEERING</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fkee'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fkee.php">View</a></div></td>
         </tr>
		  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">5</div></td>
            <td class="style3">&nbsp;INDUSTRIAL SCIENCES & TECHNOLOGY</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fist'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fist.php">View</a></div></td>
         </tr>
		  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">6</div></td>
            <td class="style3">&nbsp;MANUFACTURING ENGINEERING</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fkp'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fkp.php">View</a></div></td>
         </tr>
		  <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">7</div></td>
            <td class="style3">&nbsp;MECHANICAL ENGINEERING</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fkm'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fkm.php">View</a></div></td>
         </tr>
		 <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">8</div></td>
            <td class="style3">&nbsp;ENGINEERING TECHNOLOGY</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='ftek'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="ftek.php">View</a></div></td>
         </tr>
		 <tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center">9</div></td>
            <td class="style3">&nbsp;INDUSTRIAL MANAGEMENT</td>
            <td class="style3"><div align="center">
			<?php
			$conn = mysql_connect("localhost","atiqah","atiqah");
			if (!$conn) {
			die('Could not connect: ' . mysql_error());
			}
		
		mysql_select_db("project", $conn);

		$result = mysql_query("select count(1) FROM idea WHERE faculty='fim'");
		$row = mysql_fetch_array($result);

		$total = $row[0];
		echo  $total . " Ideas ";

		mysql_close($conn);
			?>
			</div></td>
            <td class="style3"><div align="center">&nbsp;<a href="fim.php">View&nbsp;</a></div></td>
         </tr>
		
</table>
<p align="center">&nbsp;
          <input type=button value="Back" onClick="history.go(-1)">
        </p>
       <p>
       </p>
       <p>&nbsp;       </p>
	   <h3>Faculty of Computer System & Software Engineering</h3>
	   
	   <table width="60%" border="0" align="center">
         <tr>
		 
		 <?php
		include("database.php");
		
		$query = "SELECT * FROM idea WHERE faculty='fskkp'";
		$result = mysql_query($query, $conn);

			while($row = mysql_fetch_array($result)) {
			$id = $row["id"];
			$faculty = $row["faculty"];
			$title = $row["title"];
			$description = $row["description"];
			$link = $row["link"];
			$project = $row["project"];
			$uploader = $row["uploader"];
			$tags = $row["tags"];
			?>
    
	   		  <tr  onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><p>&nbsp;       </p><strong><?php echo $title ?></strong>
			<br>
			<p><?php echo $description ?></p>
			<a href=<?php echo $link ?> target="_blank">Go to the page&rarr; </a>
			<br><br>
			Project: <?php echo $project ?>	by <?php echo $uploader ?> <br>	
			Tags: <?php echo $tags ?></td>
			
			
		
		
            <td class="style3"><div align="center">
			<form method="post" action="isikan_likes.php">
	<script type="text/javascript">
    var clicks = 0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    </script>
    
	<img src="pic/liker.gif" width="100px" height="50px" align="left" onClick="onClick()"></form></div></td>
	
			<td class="style3"><div align="center">&nbsp; <br><p><a id="clicks" >0</a>&nbsp;likes</p></div></td>
         </tr>
		 
		<?php	
		}
		?> 
	<p>&nbsp;       </p>	
	<br><br>	 
		 
</table>


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