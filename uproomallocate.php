<?php
	include('dbconnection.php');
	$id=$_POST['id'];
	$hname=$_POST['hname'];
	$room=$_POST['room'];
	$index=explode("###",$room);
	$mailid=$_COOKIE['email'];
	$qry="Select * from hostellist where id='$id'";
		$result=mysqli_query($conn,$qry);
		$row=mysqli_fetch_assoc($result);
		$ccapacity=unserialize($row['ccapacity']);
		echo $ccapacity[$index[0]][$index[1]];
		$ccapacity[$index[0]][$index[1]]=$ccapacity[$index[0]][$index[1]]-1;
		if(!($ccapacity[$index[0]][$index[1]]==-1))
		{
			$capacity=serialize($ccapacity);
			$qry="update hostellist set ccapacity='$capacity' where id='$id'";			
			$qry1="update student set hid='$id',hblock='$hname',hroom='$index[2]' where mailid='$mailid'";
			$result=mysqli_query($conn,$qry1);
			if(mysqli_affected_rows($conn)>0)
			{
				$result=mysqli_query($conn,$qry);
				echo "<script>alert('successfully updated')</script>";
			}
			else
			{
				echo "<script>alert('cannot update')</script>";
			}
		}
		else
		{
			echo "<script>alert('Invalid room number')</script>";
		}
	
?>