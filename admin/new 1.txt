<?php
	include('../dbconnection.php');
	$mailid = $_POST['mailid'];
	$firname = $_POST['rfname'];
	$lname = $_POST['lname'];
	$gen = $_POST['gender'];
	$pho = $_POST['pho'];
	$hname = $_POST['hname'];
	$hblock= $_POST['hblock'];
	$qry="Update rclist set fname='$firname', lname='$lname', gender='$gen', phone='$pho', hname='$hname', hblock='$hblock' where mail='$mailid'";
	header('Refresh: 0; url=index.html');
	if(!($lname=="" || $firname==""   || $pho=="" || $hname=="" || $hblock="" || $gen==""))
	{
		$r=mysqli_query($conn,$qry);
		if($r)
		{
			echo '<script>alert("Successfully Updated!")</script>';					
		}	
		else 
		{
			echo '<script>alert("Failed to Update!")</script>';				
		}
	}
	else
	{
		echo '<script>alert("Failed to Update!")</script>';		
	}
?>