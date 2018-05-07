var totalPriceLocal = localStorage.getItem("totalPrice");
CheckLogin();
DisplayTotal();

function DisplayTotal() {
  var priceText = document.getElementById("priceText");
  var totalPriceText = document.getElementById("totalPriceText");
  priceText.innerHTML = totalPriceLocal;
  totalPriceText.innerHTML = totalPriceLocal;
}

function CheckLogin() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "Login.php");
  xhr.onreadystatechange = function(evt) {
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      var result = JSON.parse(xhr.response);
      if(result === "" || result === null) {
        var payBtn = document.getElementById("payBtn");
        payBtn.disabled = true;
      }
    }
  }
  xhr.send();
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
