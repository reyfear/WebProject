var registerBtn = document.getElementById("Register");
if(registerBtn !== null) {
  registerBtn.addEventListener("click", gotoRegister);
}
var gotoProduct = localStorage.getItem("gotoProduct");

if(gotoProduct !== "" && gotoProduct !== null) {
  var hash = "product";
  $('html, body').animate({
    scrollTop: $(".grid-third").offset().top
  }, 800, function() {
    window.location.hash = hash;
  });
  productBtnClicked = "";
  localStorage.setItem("gotoProduct", productBtnClicked);
}

function gotoRegister(){
  window.location.href= "register.php"
}

function test() {
	alert("test");
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
        window.location.href = "index.html";
      }
});
