<?php
	include('dbconnection.php');
	$reg=$_POST['regno'];
	$bio=$_POST['bio'];
	$time=date("m/d/y g:i (A)", time());
	$qry="insert into nightattendance values('$reg','$time')";
	$qry1="select * from student where regno='$reg' LIMIT 1";
	$res = mysqli_query($conn,$qry1);
	if($res && mysqli_num_rows($res)>0)
	{
		$res = mysqli_query($conn,$qry);
		echo '<center><h1>Successfully Registered!</h1></center>';
	}
	else
	{
		echo '<center><h1>Invalid register number!</h1></center>';
	}
	header('Refresh: 5; url=attendance.php');
?>