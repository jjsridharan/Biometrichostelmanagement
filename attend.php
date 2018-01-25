<?php
	include('dbconnection.php');
	$reg=$_POST['regno'];
	$bio=$_POST['bio'];
	$time=date("m/d/y g:i (A)", time());
	$qry="insert into nightattendance values('$reg','$time')";
	$qry1="select * from student where regno='$reg' LIMIT 1";
	header('Refresh: 1; url=attendance.php');
	$res = mysqli_query($conn,$qry1);
	if($res && mysqli_num_rows($res)>0)
	{
		$res = mysqli_query($conn,$qry);
		if($res)
			echo '<script>alert("Successfully attendance recorded")</script>';
		else
			echo '<script>alert("Cannot record attendance")</script>';
	}
	else
	{
		echo '<script>alert("Invalid Credentials")</script>';
	}
	
?>