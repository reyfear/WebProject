window.onload = pageLoad;

function pageLoad(){
	var allBuyBtn = document.querySelectorAll(".buyBtn");
  for (var i = 0; i < allBuyBtn.length; i++) {
    allBuyBtn[i].addEventListener('click', gotoInfo, true);
  }

  var element = document.createElement("script");
  element.src = "js/slide.js";
  document.body.childNodes[0].appendChild(element);
}

function gotoInfo() {
  document.location.href = "http://localhost/MDT419/WebProject/info.php";
}
