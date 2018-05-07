var productClicked = localStorage.getItem("productInfo");
displayInfo();
addEventToProductImg();

function displayInfo() {
  if(productClicked !== "") {
    var infoNumber = parseInt(productClicked);
    var infoDataTemplate = document.getElementById("info_template");
    infoDataTemplate.getElementsByClassName("name")[0].innerHTML = productArray[infoNumber].name;
    infoDataTemplate.getElementsByClassName("brand")[0].innerHTML = productArray[infoNumber].brand;
    infoDataTemplate.getElementsByClassName("type")[0].innerHTML = productArray[infoNumber].type;
    infoDataTemplate.getElementsByClassName("price")[0].innerHTML = productArray[infoNumber].price;
    var infoPicTemplate = document.getElementsByClassName("productInfo_img");
    var productImg = document.getElementById("productImg");
    productImg.src = productArray[infoNumber].img["img" + 1];
    productImg.className = "piccaminfo.opaque";
    for (var i = 0; i < infoPicTemplate.length; i++) {
      infoPicTemplate[i].src = productArray[infoNumber].img["img" + (i + 1)];
    }
    var infoClicked = "";
    localStorage.setItem("Clicked", infoClicked);
  }
}

function addEventToProductImg() {
  for (var i = 0; i < infoPicTemplate.length; i++) {
    $(document).ready(function() {
      $(".productInfo_img").on('click', function() {
        $("#piccamother").removeClass("opaque");
        var newImage = this.src;;
        $("#piccamother").eq(newImage).addClass("opaque");
      });
    });
  }
}

function changePic() {
  var productImg = document.getElementById("productImg");
  productImg.src = this.src;
}
