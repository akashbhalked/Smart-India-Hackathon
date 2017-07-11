<?php
	session_start();
	if(isset($_SESSION['Buid']))
	{
		session_destroy();
	}
	header('location: Blogin.php');
?>
