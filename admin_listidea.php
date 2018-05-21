<html>
<head>
<title>LIST IDEA | ADMIN</title>

<meta http-equiv="content-type" content="text/html;charset=Windows-1252">
    <script type="text/javascript">
        var people, asc1 = 1,
            asc2 = 1,
            asc3 = 1;
        window.onload = function () {
            people = document.getElementById("people");
        }

        function sort_table(tbody, col, asc) {
            var rows = tbody.rows,
                rlen = rows.length,
                arr = new Array(),
                i, j, cells, clen;
            // fill the array with values from the table
            for (i = 0; i < rlen; i++) {
                cells = rows[i].cells;
                clen = cells.length;
                arr[i] = new Array();
                for (j = 0; j < clen; j++) {
                    arr[i][j] = cells[j].innerHTML;
                }
            }
            // sort the array by the specified column number (col) and order (asc)
            arr.sort(function (a, b) {
                return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
            });
            // replace existing rows with new rows created from the sorted array
            for (i = 0; i < rlen; i++) {
                rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
            }
        }
    </script>
	
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
		
		<h1><center>FSKKP | FKKSA | FKASA | FKEE | FIST | FKP | FKM | FTEK | FIM</center></h1>
		
		<table><thead>
            <tr>
				<center>SORT :
                <input type ="submit" onclick="sort_table(people, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1;" value="No">
                <input type ="submit" onclick="sort_table(people, 1, asc2); asc2 *= -1; asc3 = 1; asc1 = 1;" value="Faculty">
                <input type ="submit" onclick="sort_table(people, 2, asc3); asc3 *= -1; asc1 = 1; asc2 = 1;" value="Title">
				</center>
				</thead>
            </tr></table>
			
			<table width="80%" border="1" align="center">
         <tr>
    <td width="9%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>NO</strong></div></td>
    <td width="30%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>FACULTY</strong></div></td>
    <td width="30%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>TITLE</strong></div></td>
	<td width="69%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>DESCRIPTION</strong></div></td>
	<td width="22%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>LINK</strong></div></td>
	<td width="30%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>PROJECT</strong></div></td>
	<td width="30%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>UPLOADER</strong></div></td>
	<td width="22%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>TAGS</strong></div></td>
    <td width="22%" bgcolor="#CCCCCC" class="style3"><div align="center"><strong>DELETE</strong><br></div></td><br>
         </tr>
		 
		 <tbody id="people">
		 <?php
		include("database.php");
		
		$query = "SELECT * FROM idea";
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
			
		
		
	   	<tr onMouseOver="this.style.backgroundColor='#66CC33'" onMouseOut="this.style.backgroundColor='#F0F0F0'" bgcolor="#F0F0F0" class="style3">
            <td class="style3"><div align="center"><?php echo $id; ?></div></td>
            <td class="style3"><?php echo $faculty ?></td>
            <td class="style3"><div align="center"><?php echo $title ?></div></td>
			<td class="style3"><div align="center"><?php echo $description ?></div></td>
			<td class="style3"><div align="center"><?php echo $link ?></div></td>
			<td class="style3"><div align="center"><?php echo $project ?></div></td>
			<td class="style3"><div align="center"><?php echo $uploader ?></div></td>
			<td class="style3"><div align="center"><?php echo $tags ?></div></td>
            <td class="style3"><div align="center">&nbsp;<a href="delete_listidea.php?id=<?php echo $id; ?>">DELETE</a></div></td>
         </tr>
		<?php	
		}
		?>
		</tbody>
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