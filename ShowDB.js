window.onload = pageLoad;

function pageLoad(){
    readJson();
}

function readJson(){
    var http = new XMLHttpRequest();
    http.open("GET", "readLog.php");
    http.onload = function(){
        var msg = JSON.parse(http.responseText);
        showPicture(msg);
    }
    http.onerror = function(){

    };
    xhr.onerror = function() { alert("ERROR!"); };
    http.send();
}

function showPicture(pic){
    var keys = Object.keys(pic);
    var name = document.getElementById("name");
    var price = document.getElementById("price");
    var brand = document.getElementById("brand");
    var type = document.getElementById("type");
    
    if(keys.length > 0){
        brand.innerHTML = pic[keys[6]]["brand"];
    }
    
}