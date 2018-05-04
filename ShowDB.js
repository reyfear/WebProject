function readJson(){
    var http = new XMLHttpRequest();
    http.open("GET", "readLog.php");
    http.onload = function(){
        var msg = JSON.parse(http.responseText);
        showPicture(msg);
    }
    http.onerror = function(){

    };
    http.send();
}

function showPicture(pic){
    var keys = Object.keys(pic);
    var name = document.getElementById("name");
    var price = document.getElementById("price");
    
    for(var i = 0; i < keys.length; i++){
        
    }
    
}