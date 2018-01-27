<?php
	include('../dbconnection.php');
	$email=$_POST['email'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$qry="select * from rclist where mail='$email' and pass='$opass' LIMIT 1";
	header('Refresh: 0; url=index.html');
	$res = mysqli_query($conn,$qry);
	if($res && mysqli_num_rows($res)>0)
	{
		$qry="update rclist set pass='$npass'";
		$res = mysqli_query($conn,$qry);
			echo '<script>alert("Successfully Updated")</script>';
	}
	else
	{
		echo '<script>alert("Invalid Credentials")</script>';
	}
?>