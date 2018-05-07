var allCategoryBtn = document.getElementsByClassName("categoryBtn");
var currentCategory = "";

pageLoad();

function pageLoad() {
  for (var categoryBtn in allCategoryBtn) {
    allCategoryBtn[categoryBtn].onclick = categorySelected;
  }
}

function categorySelected() {
  setDefault(allCategoryBtn.length);
  clearCategory();
  currentCategory = this.getAttribute("value");
  this.id = this.id + "Click";
  displayCategory(currentCategory);
}

function displayCategory() {
  if(window.location.href.indexOf("index.php") > -1) {
    for(var count = 0; count < productArray.length; count++) {
      if(currentCategory.includes(productArray[count].typecheck)) {
        var container = document.getElementById("template_product").cloneNode(true);
        container.getElementsByClassName("header")[0].innerHTML = productArray[count].name;
        container.getElementsByClassName("productPic")[0].src = productArray[count].img["img1"];
        container.getElementsByClassName("price")[0].innerHTML = productArray[count].price;
        container.style.display = "block";
        container.id = count;

        var productContainer = document.getElementById("product");
        productContainer.appendChild(container);
      }
    }
    initProductPic();
    initBuyBtn();
  }
}

function clearCategory() {
  if(window.location.href.indexOf("index.php") > -1) {
    var divProducts = document.querySelectorAll(".card");
    for(var count = 1; count < divProducts.length; count++) {
      divProducts[count].parentNode.removeChild(divProducts[count]);
    }
  }
}

function setDefault(length) {
  for (var i = 0; i < length; i++) {
    allCategoryBtn[i].id = allCategoryBtn[i].id.replace('Click', '');
  }
}
