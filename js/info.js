var productClicked= localStorage.getItem("productInfo");
readProductData();

function readProductData() {
  console.log(productClicked);
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "infor.json");
  xhr.onreadystatechange = function(evt){
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
      var productInfo = JSON.parse(xhr.response);
      var peopleArray = Object.keys(productInfo).map(i => productInfo[i]);
      console.log(peopleArray);
      displayInfo(peopleArray);
    }
  };
  xhr.send();
}

function displayInfo(peopleArray) {
  if(productClicked !== "") {
    var infoNumber = parseInt(productClicked);
    var infoDataTemplate = document.getElementById("info_template");
    infoDataTemplate.getElementsByClassName("name")[0].innerHTML = peopleArray[infoNumber].name;
    infoDataTemplate.getElementsByClassName("brand")[0].innerHTML = peopleArray[infoNumber].brand;
    infoDataTemplate.getElementsByClassName("type")[0].innerHTML = peopleArray[infoNumber].type;
    infoDataTemplate.getElementsByClassName("price")[0].innerHTML = peopleArray[infoNumber].price;
    var infoClicked = "";
    localStorage.setItem("Clicked", infoClicked);
  }

}
