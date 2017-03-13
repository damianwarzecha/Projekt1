$(function(){

	$("#img6").click(function(){
		var el=document.getElementById("6").parentNode;
		el.remove();
	});

	$(".plus").click(function(){
		addfolder();
	});

    $("#register").click(function(){
    	openRegister();
    });
    
    $("#close").click(function(){
        closeRegister();
    });

    $("#tlo").click(function(){
    	closeRegister();
    });

	$("#addfolderbtn").click(function(){
		addfolder();
	});
    
    $(function() {
        var tooltips = $( "[title]" ).tooltip({
            position: {
                my: "left top",
                at: "right+5 top-5"
            }
        });
    });
});

function addfolder(){

	$("#tlo").css({
		'transition':'all 0.1s',
		'z-index':'2',
		'opacity':'1'
	});
}

//otwieranie okna z rejestracją
function openRegister(){
	$("#o_rej").css({
     	'transition':'all 0.1s',
       	'z-index':'3',
       	'opacity':'1'
       	});
	$("#tlo").css({
		'transition':'all 0.1s',
		'z-index':'2',
		'opacity':'1'
	});
}

//zamykanie okna z rejestracją
function closeRegister(){
	$("#tlo").css({
    	'transition':'all 0.1s',
    	'z-index':'-1',
    	'opacity':'0'
    });
    $("#o_rej").css({
    	'transition':'all 0.1s',
    	'z-index':'-1',
    	'opacity':'0'
    });
}


