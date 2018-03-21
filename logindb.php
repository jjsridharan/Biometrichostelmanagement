<?php
	include('dbconnection.php');
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$qry="select * from student where mailid='$email' and BINARY pass='$pass' LIMIT 1";
	header('Refresh: 0; url=index.html');
	$res = mysqli_query($conn,$qry);
	if($res && mysqli_num_rows($res)>0)
	{
		$row=mysqli_fetch_assoc($res);
		$name=$row['fname'];
		$reg=$row['regno'];
		setcookie('email', $email, time() + (86400 * 60), "/");
		setcookie('fname', $name, time() + (86400 * 60), "/");
		setcookie('regno', $reg, time() + (86400 * 60), "/");		
		echo '<script>alert("Successfully logged in")</script>';
	}
	else
	{
		echo '<script>alert("Invalid Credentials")</script>';
	}
?>