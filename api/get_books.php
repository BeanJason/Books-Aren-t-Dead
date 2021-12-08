<?php
	// $title = $_GET['title'];

	// $data = array('a' => 'apple', 'b' => 'banana', 'c' => 'catnip');
	// header('Content-type: text/javascript');
	// echo json_encode($data);
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
	$result = $conn->query($sql);

	$rows = array();
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
	} else {
		echo "0 results";
	}
	print json_encode($rows);
	$conn->close();
?>