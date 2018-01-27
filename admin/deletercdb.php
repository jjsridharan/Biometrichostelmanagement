<?php
	include('../dbconnection.php');
	$mailid=$_POST['mailid'];
	$qry="delete from rclist where mail='$mailid'";
	$result=mysqli_query($conn,$qry);
	if($result)
	{
		echo json_encode("success");	
	}
	else
	{
		echo json_encode("not succeeded");	
	}
	?>