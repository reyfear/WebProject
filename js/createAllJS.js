window.onload = pageLoad;

function pageLoad(){
	if(window.location.href.indexOf("index.html") > -1) {
		var slideJS = document.createElement("script");
		slideJS.src = "js/slide.js";
		document.body.childNodes[0].appendChild(slideJS);
	}

	if(window.location.href.indexOf("info.html") > -1) {
		var infoJS = document.createElement("script");
		infoJS.src = "js/info.js";
		document.body.childNodes[0].appendChild(infoJS);
	}

	var categoryJS = document.createElement("script");
	categoryJS.src = "js/category.js";
	document.body.childNodes[0].appendChild(categoryJS);

	var allButton = document.createElement("script");
	allButton.src = "js/button.js";
	document.body.childNodes[0].appendChild(allButton);

	$("img").on("contextmenu", function(e) {
	    return false;
	});
}
