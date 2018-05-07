<?php
	$servername = "localhost";
	$username = "grapescandal";
	$password = "admin";
	$dbname = "mdt419";
  $tablename = "lkuserDB";

  $email = $_GET["email"];
  $pass = $_GET["password"];
  $repassword = $_GET["repassword"];
  $address = $_GET["address"];
	$telephone = $_GET["telephone"];
	$name = $_GET["name"] . " " . $_GET["surname"];

	if($pass != $repassword) {
		echo "<script type='text/javascript'>
			alert('Password doesnt match.');
			window.location.href = 'http://localhost/MDT419/WebProject/register.php';
		</script>";
	} else {
		$conn = new mysqli($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, "utf8");

		$sql = "SELECT email FROM $tablename";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if($email == $row["email"]){
					echo "<script type='text/javascript'>
						alert('This e-mail already use.');
						window.location.href = 'http://localhost/MDT419/WebProject/register.php';
					</script>";
				}  else {
					$sql = "INSERT INTO $tablename (email, password, address, telephone, name)
					VALUES ('$email', '$pass', '$address', '$telephone', '$name')";
				}
			}

		} else {
			echo "0 results";
		}

			/*$sql = "INSERT INTO $tablename (email, password, address, telephone)
		VALUES ('$email', $pass, '$address', '$telephone')";*/

		if($conn->query($sql) === TRUE) {
			echo "<script type='text/javascript'>
				alert('Register Complete');
				window.location.href = 'http://localhost/MDT419/WebProject/index.php';
			</script>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>
