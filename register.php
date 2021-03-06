<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="Style1.css"/>
		<title>LAUMKLONG</title>
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

		<div class="grid-info">

			<form action="RegisterDB.php" method="get" accept-charset="utf-8" class="infodatatab" name="myForm" id="myForm">

				<legend class="headregis">Register</legend>
				<span>*require</span> <br>
				<span id="errormsg"></span> <br>

			<div class="layerregis">
				<div>
					Email address*:
					<input class="regisbar" type="email" name="email"required >
					<br><br>

					Password*:
					<input class="regisbar" type="password" name="password" required>
					<br><br>
					Retype Password*:
					<input class="regisbar" type="password" name="repassword" required>
					<br><br>

				</div>
				<div>
					<img src="Images/BarImages/center.png" height="300px"/>
				</div>
				<div>
					Name*:
					<input class="regisbar" type="text" name="name" required>
					<br><br>
					Surname*:
					<input class="regisbar" type="text" name="surname" required>
					<br><br>
					Address*:
					<textarea  class="addressbar" type="text" name="address" required> </textarea>
					<br><br>
					Telephone*:
					<input class="regisbar" type="text" name="telephone" required>
					<br><br>
				</div>
			</div>
			<div><input class="loginbtn" type="submit" value="Register">

			</div>
		</form>
		</div>
		<script src="js/createAllJS.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
