<?php
	include('../dbconnection.php');
	$regno=$_POST['regno'];
	$qry="Select * from student where regno='$regno'";
	$result=mysqli_query($conn,$qry);
	if($result && mysqli_num_rows($result)>0)
	{
		$result  = mysqli_fetch_assoc($result);
		$res = $result['fname'].";".$result['lname'].";".$result['gender'].";".$result['grad'].";".$result['dept'].";".$result['year'].";".$result['mailid'].";".$result['phone'].";";
		$qry="Select * from parentinfo where regno='$regno'";
		$result=mysqli_query($conn,$qry);
		$result  = mysqli_fetch_assoc($result);
		$res=$res.$result['pname'].";".$result['mailid'].";".$result['phoneno'];
		echo json_encode($res);		
	}
	?>