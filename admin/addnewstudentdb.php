<?php
	include('../dbconnection.php');
	$path = basename( $_FILES['student']['name']);
	header('Refresh: 0; url=index.html');
	function generateRandomString($length = 10) 
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	if(move_uploaded_file($_FILES['student']['tmp_name'], $path)) 
	{
		$file = fopen($path, 'r');
		while (($line = fgetcsv($file)) !== FALSE) 
		{
			$pass=generateRandomString(8);
			$qry="Insert into studentregister values('$line[0]','$pass')";
			$result=mysqli_query($conn,$qry);
			//mail('$line[1]','MIT HOSTELS',"Your username is '$line[0]' and password is '$pass'");
		}
		fclose($file);
		echo "<script>alert('Successfully Updated')</script>";
     } 
	else
	{
        echo "<script>alert('There was an error uploading the file, please try again!')<script>";
	}
?>