<?php
	include('../dbconnection.php');
	$qry="select mail from mailist";
	$r=mysqli_query($conn,$qry);
	if($r && mysqli_num_rows($r)>0)
	{
		$row=mysqli_fetch_assoc($r);
		echo json_encode($row['mail']);
	}
	else
	{
		echo json_encode("notsucceeded");
	}
?>