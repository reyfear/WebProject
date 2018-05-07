var productClicked = localStorage.getItem("productInfo");
displayInfo();
addEventToProductImg();
addEventToPiece();
addEventToBuyBtn();

function displayInfo() {
  if(productClicked !== "") {
    var infoNumber = parseInt(productClicked);
    var infoDataTemplate = document.getElementById("info_template");
    infoDataTemplate.getElementsByClassName("name")[0].innerHTML = productArray[infoNumber].name;
    infoDataTemplate.getElementsByClassName("brand")[0].innerHTML = productArray[infoNumber].brand;
    infoDataTemplate.getElementsByClassName("type")[0].innerHTML = productArray[infoNumber].type;
    infoDataTemplate.getElementsByClassName("price")[0].innerHTML = productArray[infoNumber].price;
    var infoPicTemplate = document.getElementsByClassName("productInfo_img");
    var productImg = document.querySelectorAll("#piccaminfo img");
    for (var i = 0; i < infoPicTemplate.length; i++) {
      productImg[i].src = productArray[infoNumber].img["img" + (i + 1)];
      infoPicTemplate[i].src = productArray[infoNumber].img["img" + (i + 1)];
    }
  }
}

function addEventToProductImg() {
  $(document).ready(function() {
    $(".productInfo_img").on('click', function() {
      $("#piccaminfo img").removeClass("opaque");
      var newImage = $(this).index();
      $("#piccaminfo img").eq(newImage).addClass("opaque");
    });
  });
}

function addEventToPiece() {
  var infoNumber = parseInt(productClicked);
  var pieceTextBox = document.getElementById("pieceBox");
  pieceTextBox.addEventListener("change", function() {
    var price = document.getElementById("price");
    var originalPrice = productArray[infoNumber].price;
    originalPrice = originalPrice.replace(",", "");
    price.innerHTML = addCommas(originalPrice * pieceTextBox.value);
  });
}

function addEventToBuyBtn() {
    var price = document.getElementById("price");
    var allBuyBtn = document.getElementsByClassName("buybtn");
    allBuyBtn[0].addEventListener('click', function() {
      var totalPrice = price.innerHTML;
      localStorage.setItem("totalPrice", totalPrice);
      window.location.href = "http://localhost/MDT419/WebProject/buy.php";
    }, true);
}

function addCommas(nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
