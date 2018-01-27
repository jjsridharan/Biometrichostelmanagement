<?php
if (isset($_COOKIE['email'])) 
	{
    unset($_COOKIE['email']);
    unset($_COOKIE['name']);
	unset($_COOKIE['regno']);
    setcookie('email', null, -1, '/');
    setcookie('fname', null, -1, '/');
	setcookie('regno', null, -1, '/');
} 
	header('Refresh: 0; url=index.html');
	echo '<script>alert("Successfully logged out")</script>';
?>