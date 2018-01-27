<?php
	include('../dbconnection.php');
	$qry="select mail from maillist";
	$r=mysqli_query($conn,$qry);
	if($r && mysqli_num_rows($r)>0)
	{
		$ans="";
		while($row= mysqli_fetch_assoc($r))
		{
			$ans=$ans.$row['mail'].",";
		}
		echo json_encode($ans);
	}
	else
	{
		echo json_encode("notsucceeded");
	}
?>