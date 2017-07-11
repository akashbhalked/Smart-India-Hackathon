<?php
	session_start();
	if(isset($_SESSION['Ruid']))
	{
		session_destroy();
	}
	header('location: Rlogin.php');
?>
