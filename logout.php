<?php

//start session
session_start();

//unset the variables stored in session
session_destroy();

echo "<script> window.location='homepage.php' </script>"
?>