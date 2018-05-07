var totalPriceLocal = localStorage.getItem("totalPrice");
DisplayTotal();

function DisplayTotal() {
  var priceText = document.getElementById("priceText");
  var totalPriceText = document.getElementById("totalPriceText");
  priceText.innerHTML = totalPriceLocal;
  totalPriceText.innerHTML = totalPriceLocal;
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
