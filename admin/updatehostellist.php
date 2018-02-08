<?php
	include('../dbconnection.php');
	$ans="'";
	for($i=0;$i<=10;$i=$i+1)
	{
			$ans=$ans.$_POST["".$i]."','";
	}
	$ans=$ans.$_POST["11"]."'";
	$qry="delete FROM `hostelalloted`";
	$result=mysqli_query($conn,$qry);
	$qry="insert into`hostelalloted` values($ans)";
	$result=mysqli_query($conn,$qry);
	echo json_encode($qry);
?>