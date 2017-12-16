<?php
    include('dbconnection.php');
	$regno=$_POST['regno'];
	$qry="Select name from student where regno='$regno'";
	$result=mysqli_query($conn,$qry);
	if(mysqli_num_rows($result)>0)
	{
		echo json_encode("success");
	}
	else
	{		
		echo json_encode("not present");
	}
?>	
