<?php
	include('dbconnection.php');
	header('Refresh: 0; url=index.html');
	$email=$_POST['email'];
	function makepassword($length)
	{
		$validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
		$validCharNumber = strlen($validCharacters);
		$result ="";
		for ($i = 0; $i < $length; $i++) 
		{
		$index = mt_rand(0, $validCharNumber - 1);
		$result .= $validCharacters[$index];
		}
		return $result;
	}
	$pass=makepassword(8);
	$result = mysqli_query($conn,"update student set pass ='$pass' where email = '$email' ");
	if(mysqli_affected_rows($conn))
	{
		//mail($email,"Forgot Password","Your Password is '$pass'");
		echo "<script>alert('Instructions sent your mail id');</script>";
	}
	else
	{
		echo "<script>alert('Invalid Mail id');</script>";
	}
?>