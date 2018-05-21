<!-- dbase.php -->

<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "atiqah");
define("DATABASE_PASSWORD", "atiqah");

//to establish a connection to database and save in $conn
$conn = mysql_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD);

//If connection failed then display mysql error
if (!$conn){
	die("could not connect to database");
}

//To select one particular database to be used
mysql_select_db("project", $conn) or die ("could not open products database");

//set the default time zone to use in Malaysia
date_default_timezone_set('Asia/Kuala_Lumpur');

?>