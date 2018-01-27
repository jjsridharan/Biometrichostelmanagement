<?php
if (isset($_COOKIE['officeemail'])) 
	{
    unset($_COOKIE['officeemail']);
    unset($_COOKIE['officename']);
	
    setcookie('officeemail', null, -1, '/');
    setcookie('officename', null, -1, '/');
} 
	header('Refresh: 0; url=index.html');
	echo '<script>alert("Successfully logged out")</script>';
?>