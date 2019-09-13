$(function(){

  
    var query = $(".link a");

    for(var i = 0; i < query.length; i++) {

        var str = $(query[i]).text();
        var tmp = "";
        
        for(var j = 0; j < str.length; j++)
        {
            tmp += "M";
        }
        
        var div = document.createElement("div");
        var tmpText = document.createTextNode(tmp);
        div.appendChild(tmpText);
        div.style.display = "inline-block";
        document.body.appendChild(div);
        var maxWidth = div.clientWidth;
      
        $(query[i]).width(maxWidth);
        document.body.removeChild(div);
    }

    $(".link").mouseenter(function(){
        $(this).find("a").shuffleLetters();	
        var query = $("a");
        console.log(query);
    });

})