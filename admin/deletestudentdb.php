<?php
	include('../dbconnection.php');
	$regno=$_POST['regno'];
	$qry="delete from student where regno='$regno'";
	$result=mysqli_query($conn,$qry);
	$qry="delete from parentinfo where regno='$regno'";
	$result1=mysqli_query($conn,$qry);
	if($result && $result1)
	{
		echo json_encode("success");	
	}
	else
	{
		echo json_encode("not succeeded");	
	}
	?>