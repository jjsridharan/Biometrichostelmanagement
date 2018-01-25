<?php
	include('dbconnection.php');
	$qry="Select regno from student s where not exists (Select 1 from nightattendance t where s.regno=t.regno)";
	$result=mysqli_query($conn,$qry);
	while($result && $row=mysqli_fetch_assoc($result))
	{
		$regno=$row['regno'];
		$qry="select * from currentoutpass where regno='$regno'";
		$res=mysqli_query($conn,$qry);
		if(!($res && mysqli_num_rows($res)>0))
		{
			$qry="select * from parentinfo where regno='$regno'";
			$res=mysqli_query($conn,$qry);
			$row1=mysqli_fetch_assoc($res);
			echo $regno." not present parent mail id:".$row1['mailid']."<br/>";
		}
	}
	
	$fh = fopen('data.txt', 'w');
	$result = mysqli_query($conn,"SELECT * FROM nightattendance");   
	while ($row = mysqli_fetch_array($result)) 
	{          
		$last = end($row);          
		$num = mysqli_num_fields($result) ;    
		for($i = 0; $i < $num; $i++)
		{            
			fwrite($fh, $row[$i]);                      
			if ($row[$i] != $last)
			   fwrite($fh, "\t");
		}                                                                 
		fwrite($fh, "\n");
	}
	fclose($fh);
	$result = mysqli_query($conn,"delete from nightattendance");   
?>