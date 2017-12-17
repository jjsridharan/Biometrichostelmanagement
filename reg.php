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
	$qry="INSERT INTO student(regno, fname, lname, pass, gender, year, grad, dept, mailid, phone) VALUES ('$reg','$firname','$lname','1234','$gen','$year','$grad','$dept','$mid','$pho')";
	$qry1="INSERT INTO parentinfo VALUES ('$reg','$fname','$fmid','$fpho')";
	$r=false;
	$r1=false;
	if(!($lname=="" || $firname=="" || $dept=="" || $grad=="" || ($year<1 && $year>7) || $pho=="" || $fname=="" || $fmid="" || $fpho==""))
	{
		$r=mysqli_query($conn,$qry);
		$r1=mysqli_query($conn,$qry1);
		if($r && $r1)
		{
			echo '<center><h1>Successfully Registered!</h1></center>';
			echo '<center><h2>Wait while you are forwarded....</h2></center>';
					
		}
		else if($r)
		{
			$qry="delete from student where regno='$reg'";				
			$r=mysqli_query($conn,$qry);
			echo '<center><h1>Faileds to Register!!!</h1></center>';
			
		}
		else if($r1)
		{
			$qry="delete from parentinfo where regno='$reg'";				
			$r=mysqli_query($conn,$qry);
			echo '<center><h1>Failedss to Register!!!</h1></center>';
			
		}
	}
	else
	{
		echo '<center><h1>Failedsss to Register!!!</h1></center>';
		
	}
	header('Refresh: 5; url=register.php');
?>