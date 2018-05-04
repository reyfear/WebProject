//Advertise
var btnAD = [];
var myIndex = 0;

//timer
var t;

setAD();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var length = x.length;
    for (var i = 0; i < length; i++) {
       x[i].style.display = "none";
       btnAD[i].className = "btnAD";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    btnAD[myIndex-1].className = "btnADCurrent";
    t = setTimeout(carousel, 2000); // Change image every 2 seconds
  }

function setAD() {
  clearTimeout(t);
  for(var i = 0; i < 3; i++) {
    btnAD[i] = document.getElementById("btnAD" + (i + 1));
  }

  btnAD[0].addEventListener('click', function() {
    myIndex = 0;
    changeADWithBtn(0);
  }, false);
  btnAD[1].addEventListener('click', function() {
    myIndex = 1;
    changeADWithBtn(1);
  }, false);
  btnAD[2].addEventListener('click', function() {
    myIndex = 2;
    changeADWithBtn(2);
  }, false);
  carousel();
}

function changeADWithBtn(i) {
  clearTimeout(t);
  var x = document.getElementsByClassName("mySlides");
  var adLength = x.length;
  for (j = 0; j < adLength; j++) {
     x[j].style.display = "none";
  }
  x[i].style.display = "block";
  carousel();
}
