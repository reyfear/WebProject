var registerBtn = document.getElementById("Register");
registerBtn.addEventListener("click", gotoRegister);

function gotoRegister(){
  document.location.href = "register.html"
}

$("#productBtn").on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $(".grid-third").offset().top
    }, 800);
});
