<?php
	$servername = "localhost";
	$username = "grapescandal";
	$password = "admin";
	$dbname = "mdt419";
	$tablename = "lkuserDB";

  session_start();

  $_SESSION['email'] = $_GET["email"];
  $_SESSION['password'] = $_GET["password"];
  $_SESSION['name'] = '';
  $_SESSION['login'] = 'block';
  $_SESSION['logout'] = 'none';
  $conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn, "utf8");

  if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT email, password, name FROM $tablename";
	$result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($_SESSION['email'] == $row["email"] && $_SESSION['password'] == $row["password"]) {
        $_SESSION['name'] = $row['name'];
        header("Location: http://localhost/MDT419/WebProject/index.php");
        $_SESSION['login'] = 'none';
        $_SESSION['logout'] = 'block';
        exit;
      }
    }
    session_unset();
		echo "<script type='text/javascript'>
			alert('Login Error. Please check your E-mail and Password');
			window.location.href = 'http://localhost/MDT419/WebProject/index.php';
		</script>";
  } else {
    echo "0 results";
  }
?>
