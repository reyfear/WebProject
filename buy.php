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
		<title>Insert title here</title>
		<metaname="viewport"content="width=devicewidth, initial-scale=1.0">
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
		<div class="grid-contact">
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
			<form class="shipdatatab" name="myForm" id="myForm">
			<p class="paddingtop"> วิธีการสั่งสินค้า     </p>
				<div class="checkBox">
					<input class="radiobutton" type="radio" name="Shipping by" value="Normal"> Normal<br>
					<input class="radiobutton" type="radio" name="Shipping by" value="EMS"> EMS
				</div>


				<p class="paddingcenter"> วิธีการจ่ายเงิน     </p>
				<div class="checkBox">
					<input class="radiobutton" type="radio" name="Pay by" value="Normal"> โอนเงินผ่านธนาคาร <br>
					<input class="radiobutton" type="radio" name="Pay by" value="EMS"> หักบัตรเครดิต
				</div>
				<div class="checkPrice1">
					<b><p>Price</p></b><p class = "middle" id="priceText"></p><p class="spaceship">Baht</p>
					<b><p>Shipping</p></b><p  class = "middle"></p><p class="red">*Free</p>
				</div>
				<div class ="checkPrice2"><hr></div>
				<div class="checkPrice3">
					<h3>Total</h1><p  class = "middle" id="totalPriceText"></p><h3>Baht</h3>
				</div>

				<div class="padding">
					<button class="shop" id="shop"><p>Shopping</p></button>
					<button class="pay"><p>Checkout</p></button>

				</div>
					</form>
					<form >

					</form>
					</div>

		</div>
		<script src="js/createAllJS.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
