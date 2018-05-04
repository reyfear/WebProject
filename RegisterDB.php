<?php
	$servername = "localhost";
	$username = "reyfear";
	$password = "001122";
	$dbname = "mdt419";
    $tablename = "lkuserDB";  
    
    $email = $_GET["email"];
    $pass = $_GET["password"];
    $repassword = $_GET["repassword"];
    $address = $_GET["address"];
    $telephone = $_GET["tel"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO $tablename (email, password, address, telephone)
	VALUES ('$email', $pass, '$address', '$telephone')";

	if($conn->query($sql) === TRUE) {
		echo "New record created successfully";
    header("Location: http://localhost/MDT419/week12/assignment12/login.html");
    exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>