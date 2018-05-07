<?php
	session_start();
	$name = "";
	if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
		$name = $_SESSION['name'];
	}

  echo json_encode($name);
?>
