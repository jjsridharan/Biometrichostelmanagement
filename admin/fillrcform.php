<?php
	include('../dbconnection.php');
	$mail=$_POST['mailid'];
	$qry="Select * from rclist where mail='$mail'";
	$result=mysqli_query($conn,$qry);
	if($result && mysqli_num_rows($result)>0)
	{
		$result  = mysqli_fetch_assoc($result);
		$res = $result['fname'].";".$result['lname'].";".$result['gender'].";".$result['phone'].";";
		$res=$res.$result['hname'].";".$result['hblock'];
		echo json_encode($res);		
	}
	?>