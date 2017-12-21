<?php
include('dbconnection.php');
$reg=$_POST['regno'];
$st=$_POST['st'];
$et=$_POST['et'];
$rc=$_POST['rc'];
$qry="insert into currentoutpass values('$reg','$st','$et')";
$qry1="delete from outpassrequest where regno='$reg'";
$r=mysqli_query($conn,$qry);
$r1=mysqli_query($conn,$qry1);
if($r && $r1)
{
	echo json_encode("success");
}
else
{
	if($r)
	{
		$qry="delete from currentoutpass where regno='$reg'";
		$r=mysqli_query($conn,$qry);
	}
	else if($r1)
	{
			$qry="insert into currentoutpass values('$reg','$st','$et','$rc')";
	}
	echo json_encode("error");
}
?>