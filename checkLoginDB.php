<?php
  $servername = "localhost";
  $username = "grapescandal";
  $password = "admin";
  $dbname = "MDT419";
  $tablename = "LKuserDB";
  session_start();

  $_SESSION['email'] = $_GET["email"];
  $_SESSION['password'] = $_GET["password"];
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT email, password FROM $tablename";
	$result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($_SESSION['email'] == $row["email"] && $_SESSION['password'] == $row["password"]) {
        header("Location: http://localhost/MDT419/WebProject/index.html");
        exit;
      }
    }
    session_unset();
		echo "Login error check email and password";
  } else {
    echo "0 results";
  }
?>
