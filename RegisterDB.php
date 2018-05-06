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
	$telephone = $_GET["telephone"];
	$name = $_GET["name"] . " " . $_GET["surname"];

	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT email FROM $tablename";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($email == $row["email"]){
				echo "email cant use";
				exit;
			}
			else{
				$sql = "INSERT INTO $tablename (email, password, address, telephone, name)
				VALUES ('$email', $pass, '$address', '$telephone', '$name')";
			}
		}

	} else {
		echo "0 results";
	}

    /*$sql = "INSERT INTO $tablename (email, password, address, telephone)
	VALUES ('$email', $pass, '$address', '$telephone')";*/

	if($conn->query($sql) === TRUE) {
		echo "ID Created";
    header("Location: http://localhost/MDT419/WebProject/index.html");
    exit;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
