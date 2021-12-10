<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	header("Access-Control-Allow-Headers: X-Requested-With");

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bookstore";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$isbn = $_GET["isbn"];
	$sql = "SELECT * FROM books WHERE isbn = $isbn";
	
	$result = $conn->query($sql);

	print json_encode($result->fetch_assoc());
	$conn->close();
?>