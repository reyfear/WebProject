window.onload = pageLoad;

function pageLoad(){
	var allproductpic = document.querySelectorAll(".productpic");
  for (var i = 0; i < allproductpic.length; i++) {
    allproductpic[i].addEventListener('click', gotoInfo, true);
  }

	if(document.location.href === "http://localhost/MDT419/webproject/index.html") {
		var slideJS = document.createElement("script");
		slideJS.src = "js/slide.js";
		document.body.childNodes[0].appendChild(slideJS);
	}

	var categoryJS = document.createElement("script");
	categoryJS.src = "js/category.js";
	document.body.childNodes[0].appendChild(categoryJS);

	var allButton = document.createElement("script");
	allButton.src = "js/button.js";
	document.body.childNodes[0].appendChild(allButton);
}

function gotoInfo() {
  document.location.href = "http://localhost/MDT419/WebProject/info.html";
}
