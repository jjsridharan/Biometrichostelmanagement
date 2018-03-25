<?php
	include('dbconnection.php');
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
	$pass="";
	$qry3="Select pass from studentregister where regno='$reg' LIMIT 1";
	$result=mysqli_query($conn,$qry3);	
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$pass=$row['pass'];
	}
	else
	{
		echo '<script>alert("Error in fetching data! Failed to Register!")</script>';	
	}
	$qry="INSERT INTO student(regno, fname, lname, pass, gender, year, grad, dept, mailid, phone) VALUES ('$reg','$firname','$lname','$pass','$gen','$year','$grad','$dept','$mid','$pho')";
	$qry1="INSERT INTO parentinfo VALUES ('$reg','$fname','$fmid','$fpho')";
	$r=false;
	$r1=false;
	header('Refresh: 1; url=index.html');
	if(!($lname=="" || $firname=="" || $dept=="" || $grad=="" || ($year<1 && $year>7) || $pho=="" || $fname=="" || $fmid="" || $fpho==""))
	{
		$r=mysqli_query($conn,$qry);
		$r1=mysqli_query($conn,$qry1);
		if($r && $r1)
		{
			echo '<script>alert("Successfully Registered!")</script>';					
		}
		else if($r)
		{
			$qry="delete from student where regno='$reg'";				
			$r=mysqli_query($conn,$qry);
			echo '<script>alert("Invalid student details! Failed to Register!")</script>';	
			
		}
		else if($r1)
		{
			$qry="delete from parentinfo where regno='$reg'";				
			$r=mysqli_query($conn,$qry);
			echo '<script>alert("Invalid parent details! Failed to Register!")</script>';	
			
		}
	}
	else
	{
		echo '<script>alert("Error in values! Failed to Register!")</script>';		
	}
?>