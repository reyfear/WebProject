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
					</div>
		</form>
		</div>
		<script src="js/createAllJS.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
