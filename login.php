<?php
require_once "db_login.php";

if($polaczenie->connect_errno!=0){
    new Exception();
    echo "Error: ".$polaczenie->connect_errno . " Opis: ".$polaczenie->connect_error;
}

if($_POST["login"]) {

    $login = $_POST["login"];
    $haslo = md5($_POST["password"]);

    $zapytanie = "SELECT login FROM users where login='$login'";
    $ile = $polaczenie->query($zapytanie);

    if ($ile->num_rows != 0) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: default_panel.php');
    } else {
        echo "TEST";
        
       if(mysqli_close($polaczenie)){
       	echo "<h1>OKHEJ</h1>";
       }else{
       		echo "<h1>BLAD</h1>";
       	}
    }
}

/**
 * Created by PhpStorm.
 * User: damian
 * Date: 18.01.16
 * Time: 20:50
 */

?>