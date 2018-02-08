<?php
	include('../dbconnection.php');
	$id='0';
	$qry="delete from hostellist where id='$id'";
	$result=mysqli_query($conn,$qry);
	if(mysqli_affected_rows($result)>0)
	{
		echo json_encode("success");
	}
	else
	{
		echo json_encode("not success");
	}
?>