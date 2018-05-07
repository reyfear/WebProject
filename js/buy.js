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

$(".pay").on('click', function(event) {
  event.preventDefault();
  window.location.href = "index.php";
});
