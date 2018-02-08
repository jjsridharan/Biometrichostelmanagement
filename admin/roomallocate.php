<?php
	include('../dbconnection.php');
	$hname=$_POST['hname'];
	$nblock=$_POST['nblocks'];
	$room=array();
	$capacity=array();
	for($i=1;$i<=$nblock;$i=$i+1)
	{
		$room[$i]=explode(',',$_POST['room'.$i]);
		$capacity[$i]=explode(',',$_POST['capacity'.$i]);
		$rcount=count($room[$i]);
		$ccount=count($capacity[$i]);
		if($rcount!=$ccount)
		{
			header('refresh:0;url=roomallocation.html');
			echo '<script>alert("Capacity and room count doesnt match for block'.$i.'")</script>';
		}
	}
	$rooms=serialize($room);
	$capacitys=serialize($capacity);
	$qry="select id from hostellist";
	$result=mysqli_query($conn,$qry);
	if($result)
	{
		$id=mysqli_num_rows($result);
		$qry="insert into hostellist values('$id','$hname','$nblock','".$rooms."','".$capacitys."','".$capacitys."','null','null')";
		$result=mysqli_query($conn,$qry);
		if($result && mysqli_affected_rows($conn))
		{
			header('refresh:0;url=roomallocation.html');
			echo '<script>alert("Successfully Hostel added")</script>';
		}
		else
		{
			header('refresh:0;url=roomallocation.html');
			echo '<script>alert("Cannot submit request! Please try again after some time")</script>';
		}
	}
	else
	{
		header('refresh:0;url=roomallocation.html');
		echo '<script>alert("Cannot submit request")</script>';
	}
?>