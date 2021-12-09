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

	$sql = "SELECT * FROM books";
	
	if (!empty($_GET)) {
		$genre = $_GET["genre"];
		$sql = "SELECT * FROM books WHERE genre = '$genre'";
	}

	$result = $conn->query($sql);

	$rows = array();
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		print json_encode($rows);
	} else {
		print json_encode($rows);
	}
	$conn->close();
?>