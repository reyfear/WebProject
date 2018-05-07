<?php
	session_start();
	// $name = "";
	// if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
	// 	$name = $_SESSION['name'];
	// }
	// else{
	// 	session_unset();
	// 	header("Location: http://localhost/MDT419/Webproject/index.php");
	// 	exit;
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
		<div class="grid-item" id="item1" ><img src="images/logo.png" onclick="location.href = 'index.php';"> </div>
		<div class="grid-item" id="item2"><input class="search" type="text" placeholder="Search.."></div>
		<div class="grid-item" id="item3">
			<a class="padnav" onclick="location.href = 'index.php';">Home</a>
			<a class="padnav" id="productBtn">Product</a>
			<a class="padnav" onclick="location.href = 'contact.php';">Contact</a>
		</div>
	</div>

		<div class="grid-info">
			<form action="checkLoginDB.php" method="get" accept-charset="utf-8" class="form">
				<div id="logbtn" class="logintab">
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

			<div class="infopictab" id="infoPic_template">
					<img class="piccaminfo" id="productImg"src="images/a7iii_info.jpg">
					<div class="grid-item" id="piccamother">
						<img class="productInfo_img" src="images/a7iii_info.jpg" width="100px" height="100px " >
						<img class="productInfo_img" src="images/a7iii_info.jpg" width="100px" height="100px " >
						<img class="productInfo_img" src="images/a7iii_info.jpg" width="100px" height="100px " >
					</div>

			</div>

			<div class="infodatatab" id="info_template">
				<div class="infodata">
					<p class="space">Name: </p>
					<p class="name">Sony A7 markIII</p>
				</div>
				<div class="infodata">
					<p class="space">Brand:</p>
					<p class="brand">Sony</p>
				</div>
				<div class="infodata">
					<p class="space">Type:</p>
					<p class="type">Mirrorless</p>
				</div>
				<div class="infodata">
					<p class="space">Quantity </p>
					<input class="numbar" type="text" value="1">
					<p> Piece</p>
					</div>
				<div class="infodatapircetab">
					<div class="infodata">
					<p class="space">Price: </p>
					<p class="price"> 50,000 </p>
					<p class="bath">Bath</p>
					</div>

					<div class="grid-item" id="#buy">
						<button class="buybtn">Buy Now</button>

					</div>
				</div>
			</div>
		</div>
		<script src="js/createAllJS.js"></script>
		<script src="js/product.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
