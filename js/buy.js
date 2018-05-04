window.onload = pageLoad;

function pageLoad(){
	var allproductpic = document.querySelectorAll(".productpic");
  for (var i = 0; i < allproductpic.length; i++) {
    allproductpic[i].addEventListener('click', gotoInfo, true);
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
