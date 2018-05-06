window.onload = pageLoad;

function pageLoad(){
	var allproductpic = document.querySelectorAll(".productpic");
  for (var i = 0; i < allproductpic.length; i++) {
    allproductpic[i].addEventListener('click', gotoInfo, true);
  }

	if(window.location.href.indexOf("index.html") > -1) {
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

	if(window.location.href.indexOf("index.html") > -1 || window.location.href.indexOf("info.html") > -1) {
			var allProduct = document.createElement("script");
			allProduct.src = "js/product.js";
			document.body.childNodes[0].appendChild(allProduct);
	}
}

function gotoInfo() {
  window.location.href = "http://localhost/MDT419/WebProject/info.html";
}
