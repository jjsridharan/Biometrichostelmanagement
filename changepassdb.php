<?php
	include('dbconnection.php');
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$qry="select * from student where mailid='".$_COOKIE['email']."'and BINARY pass='$opass' LIMIT 1";
	header('Refresh: 0; url=index.html');
	$res = mysqli_query($conn,$qry);
	if($res && mysqli_num_rows($res)>0)
	{
		$qry="UPDATE Student set pass='$npass' where mailid='".$_COOKIE['email']."'";
		$res = mysqli_query($conn,$qry);
		echo '<script>alert("Successfully logged in")</script>';
	}
	else
	{
		echo '<script>alert("Invalid Credentials")</script>';
	}
?>