<?php
	session_start();
	$currentUser = array();
	if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
		$currentUser[0] = $_SESSION['name'];
		$currentUser[1] = $_SESSION['address'];
	} else {
		$currentUser[0] = "Guest";
		$currentUser[1] = "Please login first";
	}

  echo json_encode($currentUser);
?>
