window.onload = pageLoad;

function pageLoad(){
	if(window.location.href.indexOf("index.php") > -1) {
		var slideJS = document.createElement("script");
		slideJS.src = "js/slide.js";
		document.body.childNodes[0].appendChild(slideJS);
	}

	if(window.location.href.indexOf("info.php") > -1) {
		var infoJS = document.createElement("script");
		infoJS.src = "js/info.js";
		document.body.childNodes[0].appendChild(infoJS);
	}

	var allButton = document.createElement("script");
	allButton.src = "js/button.js";
	document.body.childNodes[0].appendChild(allButton);

	if(window.location.href.indexOf("buy.php") > -1) {
		var buyJS = document.createElement("script");
		buyJS.src = "js/buy.js";
		document.body.childNodes[0].appendChild(buyJS);
	}

	$("img").on("contextmenu", function(e) {
	    return false;
	});
}
