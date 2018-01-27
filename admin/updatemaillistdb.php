<?php
	include('../dbconnection.php');
	$mailid = $_POST['mail'];
	$mail=explode(",",$mailid);
	$qry="delete from maillist";
	header('Refresh: 0; url=index.html');
	$r=mysqli_query($conn,$qry);
	if($r && mysqli_affected_rows($conn))
	{
		foreach($mail as $i =>$key) 
		{
			if($key!="")
			{
				$qry="insert into maillist values('$key')";
				$r=mysqli_query($conn,$qry);
			}
		}	
		echo json_encode("success");
	}
	else
	{
		echo json_encode("Failed to Update");		
	}
?>