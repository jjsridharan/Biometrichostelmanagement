<?php
	include('../dbconnection.php');
	$mailid = $_POST['mailid'];
	$firname = $_POST['rfname'];
	$lname = $_POST['lname'];
	$gen = $_POST['gender'];
	$pho = $_POST['pho'];
	$hname = $_POST['hname'];
	$hblock= $_POST['hblock'];
	$qry="INSERT INTO rclist VALUES ('$firname','$lname','$gen','1234','$mailid','$pho','$hname','$hblock')";
	header('Refresh: 0; url=registerrc.php');
	if(!($lname=="" || $firname==""   || $pho=="" || $hname=="" || $hblock="" || $gen==""))
	{
		$r=mysqli_query($conn,$qry);		
		if($r)
		{
			echo '<script>alert("Successfully Registered!")</script>';				
		}
		
		else
		{
			echo '<script>alert("Failed to Register!")</script>';			
		}
	}
	else
	{
		echo '<script>alert("Failed to Register!")</script>';		
	}
?>