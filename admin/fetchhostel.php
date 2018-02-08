<?php
	include('../dbconnection.php');
	$id=$_POST['id'];
	$qry="select * from hostellist where id='$id'";
	$result=mysqli_query($conn,$qry);
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		$ans=$row['hname']."###".$row['nblocks']."###";
		$nblock=$row['nblocks'];
		$room=unserialize($row['roomno']);
		$capacity=unserialize($row['capacity']);
		for($i=1;$i<=$nblock;$i=$i+1)
		{
			$rooms="";
			for($j=0;$j<count($room[$i]);$j=$j+1)
			{
				$rooms=$rooms.$room[$i][$j].",";
			}
			$ans=$ans.$rooms."###";	
			$capacitys="";
			for($j=0;$j<count($capacity[$i]);$j=$j+1)
			{
				$capacitys=$capacitys.$capacity[$i][$j].",";
			}			
			$ans=$ans.$capacitys."###";			
		}
		echo json_encode($ans);
	}
	else
	{
		echo json_encode("not success");
	}
?>