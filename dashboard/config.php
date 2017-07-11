<?php
$connection = new mysqli("localhost", "root","", "sih");
if ($connection->connect_errno) {
	printf("Connect failed %s\n", $conn->connect_error);
        header('location: index.php');
	exit();
}
?>
