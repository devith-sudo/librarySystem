<?php
	$conn = new mysqli('localhost', 'root', '', 'db_ls');

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// echo "Connected Successfully";
?>
