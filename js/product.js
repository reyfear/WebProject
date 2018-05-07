var productArray = readProductData();

function readProductData() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "infor.json");
  xhr.onreadystatechange = function(evt){
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
      var productInfo = JSON.parse(xhr.response);

      productArray = Object.keys(productInfo).map(i => productInfo[i]);

      if(window.location.href.indexOf("index.php") > -1) {
        for(var count = 0; count < productArray.length; count++) {
          var container = document.getElementById("template_product").cloneNode(true);
          container.getElementsByClassName("header")[0].innerHTML = productArray[count].name;
          container.getElementsByClassName("productPic")[0].src = productArray[count].img["img1"];
          container.getElementsByClassName("price")[0].innerHTML = productArray[count].price;
          container.style.display = "block";
          container.id = count;

          var productContainer = document.getElementById("product");
          productContainer.appendChild(container);
        }
        initProductPic();
        initBuyBtn();
      }
    }
  };
  xhr.send();
  return productArray;
}

function initProductPic() {
  var allproductpic = document.querySelectorAll(".productPic");
  for (var i = 0; i < allproductpic.length; i++) {
    allproductpic[i].addEventListener('click', gotoInfo, true);
  }
}

function initBuyBtn() {
  console.log("init");
  var allBuyBtn = document.querySelectorAll(".buyBtn");
  for (var i = 0; i < allBuyBtn.length; i++) {
    allBuyBtn[i].addEventListener('click', gotoBuyNow, true);
  }
}

function setInfoClicked(id) {
  var infoClicked = id;
  localStorage.setItem("productInfo", infoClicked);
}

function gotoBuyNow() {
  setInfoClicked(this.parentNode.parentNode.parentNode.id);
  var totalPrice = productArray[this.parentNode.parentNode.parentNode.id].price;
  localStorage.setItem("totalPrice", totalPrice);
  window.location.href = "http://localhost/MDT419/WebProject/buy.php";
}

function gotoInfo() {
  setInfoClicked(this.parentNode.id);
  window.location.href = "http://localhost/MDT419/WebProject/info.php";
}
