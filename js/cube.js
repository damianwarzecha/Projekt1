
/**
 * Created by damian on 15.02.16.
 */
i=0;
function runStop() {
    //pobranie ilosci kostek
    cube = $(document).find(".cube").length;
    //randomowa wartosc od 1 do ilosci kostek
    nrCube = Math.floor(Math.random() * cube + 1);


    var className = $("#"+nrCube).children(".parent").attr("class");

    if(className == "parent") $("#"+nrCube).children(".parent").toggleClass("obrot1");
    else if (className == "parent obrot1") {
        $("#"+nrCube).children(".parent").toggleClass("obrot1");
        $("#"+nrCube).children(".parent").toggleClass("obrot2");
    }else if (className == "parent obrot2") {
        $("#"+nrCube).children(".parent").toggleClass("obrot2");
        $("#"+nrCube).children(".parent").toggleClass("obrot3");
    }else if (className == "parent obrot3") {
        $("#"+nrCube).children(".parent").toggleClass("obrot3");
        $("#"+nrCube).children(".parent").toggleClass("obrot4");
    }else if (className == "parent obrot4") {
        $("#"+nrCube).children(".parent").toggleClass("obrot4");
        $("#"+nrCube).children(".parent").toggleClass("obrot1");
    }
}

$(document).ready(function(){
    setInterval("runStop()",6000);
    delFolder();
});

function delFolder(){

    folders = $(document).find(".cube").length;

    for(licz=1; licz<=folders; licz++){
        alert(licz);
        $("#img"+licz).click(function(){
            var el=$("#"+licz).parent();
            el.remove();
        });
    }
}