<?php
$connection = new mysqli("localhost", "root","123@resume", "sih");
if ($connection->connect_errno) {
	printf("Connect failed %s\n", $connection->connect_error);
        header('location: index.php');
	exit();
}
?>
