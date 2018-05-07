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
			<input class="search" type="text" placeholder="Search..">
			<img class="imgsearch" src="images/search.png">
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
			<form class="contactdatatab" name="myForm" id="myForm">

				<legend class="headregis">Contact Us</legend>

				<div class="contactdata">
					<h2 class="space">บริษัท ลำกล้อง จำกัด </h2>
				</div>
				<div class= "contactdataspace">
					<p class="cspace">ที่อยู่:</p>
					<p>365/986 หมู่บ้านสวนธนคอนโด หมู่ 2 ถนน พุทธบูชา แขวงบางมด เขตทุ่งครุ 10140 </p>
				</div>
				<div class= "contactdataspace">
						<p class="cspace">เบอร์โทรศัพท์:</p>
						<p>08x-xxxx-xxx </p>
					</div>
				<div class= "contactdataspace">
						<p class="cspace">แผนที่:</p>
						<div class="border">
								<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.081709524636!2d100.48611386482938!3d13.652793390411576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6b50033c26cbf468!2sSuan+Thon+Club!5e0!3m2!1sen!2sth!4v1525596959575" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
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
