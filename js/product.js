var peopleArray = readProductData();

function readProductData() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "infor.json");
  xhr.onreadystatechange = function(evt){
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
      var productInfo = JSON.parse(xhr.response);

      peopleArray = Object.keys(productInfo).map(i => productInfo[i]);

      if(window.location.href.indexOf("index.php") > -1) {
        for(var count = 0; count < peopleArray.length; count++) {
          var container = document.getElementById("template_product").cloneNode(true);
          container.getElementsByClassName("header")[0].innerHTML = peopleArray[count].name;
          container.getElementsByClassName("productPic")[0].src = peopleArray[count].img["img1"];
          container.getElementsByClassName("price")[0].innerHTML = peopleArray[count].price;
          container.style.display = "block";
          container.id = count;

          var productContainer = document.getElementById("product");
          productContainer.appendChild(container);
        }
        initProductPic();
      }
    }
  };
  xhr.send();
  return peopleArray;
}

function initProductPic() {
  var allproductpic = document.querySelectorAll(".productPic");
  for (var i = 0; i < allproductpic.length; i++) {
    allproductpic[i].addEventListener('click', gotoInfo, true);
  }
}

function gotoInfo() {
  text = "Ho";
  var infoClicked = this.parentNode.id;
  localStorage.setItem("productInfo", infoClicked);
  window.location.href = "http://localhost/MDT419/WebProject/info.php";
}
