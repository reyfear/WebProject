readProductData();

function readProductData() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "infor.json");
  xhr.onreadystatechange = function(evt){
    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
      var result = JSON.parse(xhr.response);
      console.log("Response: ", result);
    }
  };
  xhr.send();
}
