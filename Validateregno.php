<?php
    include('dbconnection.php');
	$regno=$_POST['regno'];
	$qry="Select fname,year,dept from student where regno='$regno'";
	$result=mysqli_query($conn,$qry);
	if($result && mysqli_num_rows($result)>0)
	{
		$result  = mysqli_fetch_assoc($result);
		$res = $result['fname'].";".$result['year'].";".$result['dept'];
		echo json_encode($res);		
	}
	else
	{	
		echo json_encode("success");
	}
?>	
