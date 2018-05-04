<?php
	$servername = "localhost";
	$username = "grapescandal";
	$password = "admin";
	$dbname = "MDT419";
	$tablename = "LKuserDB";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully <br>";

	$sql = "CREATE TABLE $tablename(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		email VARCHAR(60) NOT NULL,
		password VARCHAR(50) NOT NULL,
		address VARCHAR(100) NOT NULL
	)";

	if($conn->query($sql) === TRUE) {
		echo "Table $tablename created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>
