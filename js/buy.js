window.onload = pageLoad;

function pageLoad(){
	var allBuyBtn = document.querySelectorAll(".buyBtn");
  for (var i = 0; i < allBuyBtn.length; i++) {
    allBuyBtn[i].addEventListener('click', gotoInfo, true);
  }

  var slideJS = document.createElement("script");
  slideJS.src = "js/slide.js";
  document.body.childNodes[0].appendChild(slideJS);

	var categoryJS = document.createElement("script");
	categoryJS.src = "js/category.js";
	document.body.childNodes[0].appendChild(categoryJS);
}

function gotoInfo() {
  document.location.href = "http://localhost/MDT419/WebProject/info.php";
}
