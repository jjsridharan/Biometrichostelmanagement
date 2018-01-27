<?php
	include('../dbconnection.php');
	$reg = $_POST['regno'];
	$firname = $_POST['sfname'];
	$lname = $_POST['lname'];
	$gen = $_POST['gender'];
	$grad = $_POST['grads'];
	$dept="";
	if($grad == "UG")
	{
		$dept  = $_POST['dept'];
	}
	else if($grad == "PG")
	{
		$dept  = $_POST['dept1'];
	}
	else
	{
		$dept  = $_POST['dept2'];
	}
	$year = $_POST['year'];
	$mid = $_POST['mid'];
	$pho = $_POST['pho'];
	$fname = $_POST['fname'];
	$fmid = $_POST['fmid'];
	$fpho = $_POST['fpho'];
	$qry="Update student set fname='$firname', lname='$lname', gender='$gen', year='$year', grad='$grad', dept='$dept', mailid='$mid', phone='$pho' where regno='$reg'";
	$qry1="update parentinfo set pname='$fname',mailid='$fmid',phoneno='$fpho' where regno='$reg'";
	$r=false;
	$r1=false;
	header('Refresh: 1; url=index.html');
	if(!($lname=="" || $firname=="" || $dept=="" || $grad=="" || ($year<1 && $year>7) || $pho=="" || $fname=="" || $fmid="" || $fpho==""))
	{
		$r=mysqli_query($conn,$qry);
		$r1=mysqli_query($conn,$qry1);
		if($r && $r1)
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