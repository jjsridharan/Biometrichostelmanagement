<?php
	include('../dbconnection.php');
	$qry="SELECT * FROM `hostelalloted`";
	$result=mysqli_query($conn,$qry);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$ans="";
		foreach($row as $column=>$value) 
		{
			$ans=$ans.$value."###";	
		}
		echo json_encode($ans);
	}
	else
	{
		echo json_encode("not success");
	}
?>