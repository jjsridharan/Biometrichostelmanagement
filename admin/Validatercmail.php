<?php
    include('../dbconnection.php');
	$mailid=$_POST['mailid'];
	$qry="Select * from rclist where mail='$mailid'";
	$result=mysqli_query($conn,$qry);
	if($result && mysqli_num_rows($result)>0)
	{
		$result  = mysqli_fetch_assoc($result);
		$res = $result['fname'].";".$result['phone'].";".$result['hname'];
		echo json_encode($res);		
	}
	else
	{	
		echo json_encode("success");
	}
?>	
