<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hosteldatabase";
$prefix = "";
$conn = @mysqli_connect($mysql_hostname, $mysql_user,$mysql_password) or die("Could not connect database");
mysqli_select_db($conn,$mysql_database) or die("<h1>Could not select database<h1>");
?>
