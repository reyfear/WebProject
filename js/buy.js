var productInfo = localStorage.getItem("productInfo");
var totalPriceLocal = localStorage.getItem("totalPrice");
var amount = localStorage.getItem("amount");
var currentUser;
var radioShippingStatus = false;
var radioPaymentStatus = false;

CheckLogin();

function DisplayTotal(userInfo) {
  var productName = document.getElementById("nameproduct");
  var userAddress = document.getElementById("address");
  var priceText = document.getElementById("priceText");
  var pieceText = document.getElementById("pieceText");
  var totalPriceText = document.getElementById("totalPriceText");
  currentUser = userInfo;
  productName.innerHTML = productArray[productInfo].name;
  userAddress.innerHTML = currentUser[1];
  priceText.innerHTML = productArray[productInfo].price;
  pieceText.innerHTML = amount;
  totalPriceText.innerHTML = totalPriceLocal;
}

function CheckLogin() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "Login.php");
  xhr.onreadystatechange = function(evt) {
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      var result = JSON.parse(xhr.response);
      var userInfo = result;
      DisplayTotal(userInfo);
    }
  }
  xhr.send();
}

function CheckOutShow() {
  if((radioShippingStatus && radioPaymentStatus === true) && (currentUser[0] !== "Guest")) {
    var payBtn = document.getElementById("payBtn");
    payBtn.disabled = false;
  }
}

$("#shop").on('click', function(event) {
      event.preventDefault();
      var hash = "product";
      var productBtnClicked = "click";
      localStorage.setItem("gotoProduct", productBtnClicked);
      window.location.href = "index.php";
});

$(".pay").on('click', function(event) {
  event.preventDefault();
  window.location.href = "index.php";
});

$("input:radio[name='Shipping by']").change(function() {
  radioShippingStatus = true;
  CheckOutShow();
});

$("input:radio[name='Pay by']").change(function() {
  radioPaymentStatus = true;
  CheckOutShow();
});
