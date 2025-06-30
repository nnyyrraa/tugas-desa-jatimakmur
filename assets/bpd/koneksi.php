<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "jatimakmur";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if($conn->connect_error){
		die("Failed to connect to MySQL: " .mysqli_connect_error());
	}
?>