<?php
	session_start();
	if(isset($_SESSION['Bauid']))
	{
		session_destroy();
	}
	header('location: bhaemployee.php');
?>
