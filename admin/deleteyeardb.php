<?php
	include('../dbconnection.php');
	$grad = $_POST['grad'];
	$year = $_POST['year'];
	$qry="delete from student where year='$year' and grad='$grad'";
	header('Refresh: 1; url=index.html');
	$r=mysqli_query($conn,$qry);
	if(mysqli_affected_rows($conn))
	{
		echo '<script>alert("Successfully Updated!")</script>';
	}
	else
	{
		echo '<script>alert("Failed to Update!")</script>';		
	}
?>