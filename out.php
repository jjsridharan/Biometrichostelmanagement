<?php
	include('dbconnection.php');
	$reg=$_POST['regno'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$time = strtotime($sdate);
	$sdate=date("m/d/y g:i (A)", $time);
	$time = strtotime($edate);
	$edate=date("m/d/y g:i (A)", $time);
	$qry="insert into currentoutpass values('$reg','$sdate','$edate')";
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
	header('Refresh: 5; url=outpass.php');
?>