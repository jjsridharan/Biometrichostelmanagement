<?php
	session_start();
	include('dbconnection.php');
	$regno=$_POST['regno'];
	$pass=$_POST['pass'];
	$qry="select * from studentregister where regno='$regno' and BINARY pass='$pass' LIMIT 1";
	header('Refresh: 0; url=register.php');
	$res = mysqli_query($conn,$qry);
	if($res && mysqli_num_rows($res)>0)
	{
		$_SESSION['regno']=$regno;
		echo '<script>alert("Successfully logged in")</script>';
	}
	else
	{
		echo '<script>alert("Invalid Credentials")</script>';
	}
?>