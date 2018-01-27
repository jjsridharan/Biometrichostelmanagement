<?php
if (isset($_COOKIE['rcmail'])) 
	{
    unset($_COOKIE['rcmail']);
    unset($_COOKIE['rcname']);
	
    setcookie('rcmail', null, -1, '/');
    setcookie('rcname', null, -1, '/');
} 
	header('Refresh: 0; url=index.html');
	echo '<script>alert("Successfully logged out")</script>';
?>