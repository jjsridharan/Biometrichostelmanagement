<?php
	include('dbconnection.php');
	$reg=$_POST['regno'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$rcmail=$_POST['rcmail'];
	$reason=trim($_POST['reason']);
	$time = strtotime($sdate);
	$sdate=date("m/d/y g:i (A)", $time);
	$time = strtotime($edate);
	$edate=date("m/d/y g:i (A)", $time);
	header('Refresh: 1; url=outpass.php');
	date_default_timezone_set('Asia/Kolkata');
	$date=date("m/d/y g:i (A)", time());
	if($date > $sdate)
	{
		echo '<script>alert("Choose date after today`s date")</script>';
	}
	else
	{
		$qry="insert into outpassrequest values('$reg','$sdate','$edate','$reason','$rcmail')";
		$qry1="select * from student where regno='$reg' LIMIT 1";
		$res = mysqli_query($conn,$qry1);
		
		if($res && mysqli_num_rows($res)>0)
		{
			$res = mysqli_query($conn,$qry);
			if($res)
				echo '<script>alert("Successfully Request Submitted")</script>';
			else
				echo '<script>alert("Cannot submit request! Already an active request which has not been accepted")</script>';
		}
		else
		{
			echo '<script>alert("Invalid details")</script>';
		}
	}
?>