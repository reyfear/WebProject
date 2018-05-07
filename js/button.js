var registerBtn = document.getElementById("Register");
if(registerBtn !== null) {
  registerBtn.addEventListener("click", gotoRegister);
}
var gotoProduct = localStorage.getItem("gotoProduct");
var searchValue = localStorage.getItem("searchValue");


if(gotoProduct !== "" && gotoProduct !== null) {
  var hash = "product";
  $('html, body').animate({
    scrollTop: $(".grid-third").offset().top
  }, 800, function() {
    window.location.hash = hash;
  });
  productBtnClicked = "";
  localStorage.setItem("gotoProduct", productBtnClicked);

  if(searchValue !== "" && searchValue !== null) {
    clearCategory();
    searchCategory(searchValue);
  }
}

function gotoRegister(){
  window.location.href= "register.php"
}

$("#productBtn").on('click', function(event) {
      event.preventDefault();
      var hash = "product";
      if(window.location.href.indexOf("index.php") > -1) {
        $('html, body').animate({
          scrollTop: $(".grid-third").offset().top
        }, 800, function() {
          window.location.hash = hash;
        });
        var productBtnClicked = "";
        localStorage.setItem("gotoProduct", productBtnClicked);
      } else {
        var productBtnClicked = "click";
        localStorage.setItem("gotoProduct", productBtnClicked);
        window.location.href = "index.php";
      }
});

$("#searchBtn").on('click', function(event) {
      event.preventDefault();
      var hash = "product";
      if(window.location.href.indexOf("index.php") > -1) {
        $('html, body').animate({
          scrollTop: $(".grid-third").offset().top
        }, 800, function() {
          window.location.hash = hash;
        });
        var productBtnClicked = "";
        localStorage.setItem("gotoProduct", productBtnClicked);
        clearCategory();
        searchCategory($("#searchBox").val());
      } else {
        var productBtnClicked = "click";
        var searchValue = $("#searchBox").val();
        localStorage.setItem("gotoProduct", productBtnClicked);
        localStorage.setItem("searchValue", searchValue);
        window.location.href = "index.php";
      }
});


function searchCategory(currentCategory) {
  if(window.location.href.indexOf("index.php") > -1) {
    for(var count = 0; count < productArray.length; count++) {
      if(productArray[count].name.toLowerCase().includes(currentCategory.toLowerCase())) {
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
  }
}
