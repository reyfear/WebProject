<?php
	$servername = "localhost";
	$username = "reyfear";
	$password = "001122";
	$dbname = "mdt419";
    $tablename = "details";    
    $name = $_GET["name"];
    $email = $_GET["email"];
    session_start();
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
  
      $sql = "SELECT email, name FROM $tablename";
      $result = $conn->query($sql);
  
    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo $row["password"];
        if($email == $row["email"] && $name == $row["name"]) {
          echo "yes";
          exit;
        }
      }
      session_unset();
    } else {
      echo "0 results";
    }
?>