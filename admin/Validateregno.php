<?php
    include('../dbconnection.php');
	$regno=$_POST['regno'];
	$qry="Select fname,year,dept from student where regno='$regno'";
	$result=mysqli_query($conn,$qry);
	if($result && mysqli_num_rows($result)>0)
	{
		echo json_encode("in database");		
	}
	else
	{	
		echo json_encode("success");
	}
?>	
