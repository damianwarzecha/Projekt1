<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="jquery/jquery-ui.css" />

    <script src="ajax.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script src="jquery/external/jquery/jquery.js"></script>

    <title>AJAX</title>
</head>
<body>

    <h1>Wszytanie strony do znacznika DIV</h1>
    <div id="info"><p id="kup" style="font-size:10px; color:red; transition: all 1s">to zdanie zostanie podmienione</p> </div>

    <script>
        params = "url=amazon.com"
        request = new ajaxRequest()
        request.open("POST", "abc.php", true)
        request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
        request.setRequestHeader("Content-length", params.length)
        request.setRequestHeader("Connection","close")

        request.onreadystatechange = function(){
            if(this.readyState == 4){
                if(this.status == 200){
                    if(this.responseText != null){
                        document.getElementById('info').innerHTML = this.responseText
                    }else{
                        alert("blad ajax")
                    }
                }else{
                    alert("blad ajax")
                }
            }
        }
        request.send(params)

    </script>

</body>
</html>

<?php
if (isset($_POST['url'])){
    echo file_get_contents('http://' . SanitizeString($_POST['url']));
}

function SanitizeString($var){
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripcslashes($var);
}
?>