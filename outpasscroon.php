<?php
	include('dbconnection.php');
	$qry="Select * from currentoutpass";
	$result=mysqli_query($conn,$qry);
	date_default_timezone_set('Asia/Kolkata');
	while($result && $row=mysqli_fetch_assoc($result))
	{		
		$date=date("m/d/y g:i (A)", time());
		$edate=$row['etime'];
		echo $date;
		echo $edate;
		if ($edate < $date)
		{
			$regno=$row['regno'];
			$qry="select * outpasshistory where regno='$regno' LIMIT 1";
			$res=mysqli_query($conn,$qry);
			if($res)
			{
					$res=mysqli_fetch_assoc($res);
					$history=$res['history']."##".$row['stime']."##".$row['etime']."##".$row['reason']."##".$row['approvedby'];
					$qry="update outpasshistory set history='$history' where regno='$regno'";
					$res=mysqli_query($conn,$qry);
			}
			else
			{
				$history=$row['stime']."##".$row['etime']."##".$row['reason']."##".$row['approvedby'];
				$qry="insert into outpasshistory values('$regno','$history')";
				$res=mysqli_query($conn,$qry);
			}
			$qry="delete from currentoutpass where regno='$regno'";
			$res=mysqli_query($conn,$qry);
		}
	}
?>