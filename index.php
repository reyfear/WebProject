<?php
	session_start();
	$name = "";
	if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
		$name = $_SESSION['name'];
	}
	// else{
	// 	//session_unset();
	// 	header("Location: http://localhost/MDT419/Webproject/index.php");
	// 	//exit;
	// }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="Style1.css"/>
		<title>LAUMKLONG</title>
		<metaname="viewport"content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	</head>
<body>
	<div class="grid-nav">
		<div class="grid-item" id="item1" ><img class="logopic" src="images/logo.png" onclick="location.href = 'index.php';"> </div>
		<div class="grid-item" id="item2">
			<input id="searchBox" class="search" type="text" placeholder="Search..">
			<img id="searchBtn" class="imgsearch" src="images/search.png">
		</div>
		<div class="grid-item" id="item3">
			<a class="padnav" onclick="location.href = 'index.php';">Home</a>
			<a class="padnav" id="productBtn">Product</a>
			<a class="padnav" onclick="location.href = 'contact.php';">Contact</a>
		</div>
	</div>
		<div class="grid-content">
			<div class="grid-second">
				<div id="logbtn" class="logintab">
				<form action="checkLoginDB.php" method="get" accept-charset="utf-8" class="form">
					<div class="loginpad" style = "display: <?php echo $_SESSION['login']?>">
						<h2>Login</h2>
						<p class="logintextpad">E-mail</p>
						<input class="loginbar" name="email" type="text">
						<p class="logintextpad">Password</p>
						<input class="loginbar" name="password" type="password">
						<div class="grid-item" id="item4">
							<button type="submit" class="loginbtn" id="Login">Login</button>
							<button type="button" class="loginbtn" id="Register">Register</button>
						</div>
					</div>
					</form>
					<form action="checkLogout.php" method="get" accept-charset="utf-8" class="form">
					<div class="logoutpad" style = "display: <?php echo $_SESSION['logout']?>">
						<img class="profilepic" src="images/chico.png">

							<p class="spacelogout"><?php echo $_SESSION['name']?></p>
							<div>
								<button type="submit" class="logoutbtn" id="Logout">Logout</button>
							</div>
					</div>
					</form>
				</div>

			<div class="adcontent">
			<div class="AD">
			    <img class="mySlides" src="images/slide/slide01.png">
			    <img class="mySlides" src="images/slide/slide02.png">
			    <img class="mySlides" src="images/slide/slide03.png">
			</div>
			    <div class="btnADlayout">
			        <button id="btnAD1" class="btnAD"></button>
			        <button id="btnAD2" class="btnAD"></button>
			        <button id="btnAD3" class="btnAD"></button>
				</div>
			</div>
		</div>
		<div class="grid-third">
				<div class="categoryBtn" id="Camera" value="Camera">
					<img class="iconHead" src="images/camera.png" >
				</div>
				<div class="categoryBtn" id="Lens" value="Lens">
					<img class="iconHead" src="images/camera-lens.png">
				</div>
				<div class="categoryBtn" id="Action" value="Action">
					<img class="iconHead" src="images/gopro.png" >
				</div>
				<div class="categoryBtn" id="Drone" value="Drone">
					<img class="iconHead" src="images/drone.png" >
				</div>

		</div>
		<div class="grid-item" id="product">
				<div class="card" id="template_product">
					<p class="header" id="product_header">Sony A7 markIII</p>
					<img class="productPic" src="images/sony_a7iii.png" id="pruduct_img">
					<div class="container">
						<p class="price" id="product_price" style = "display:inline-block;">$199</p>
						<p style = "display:inline-block;"> Bath<p>
						<p><button class="buyBtn">Buy Now</button></p>
					</div>
				</div>
		</div>
	</div>
	<script src="js/createAllJS.js"></script>
	<script src="js/product.js"></script>
	<script src="js/category.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
