<?php

error_reporting(E_ALL | E_STRICT | E_NOTICE);
ini_set('display_errors', '1');

    session_start();
    require_once "db_login.php";

    if( isset($_POST["remail"]) ){
        $flag = true;
        $_SESSION["flag"]=$flag;

//		Walidacja loginu													//

        //przypisanie do zmiennej z POSTA
        $login = $_POST["rlogin"];
        //sprawdzenie długości loginu
        if( (strlen($login)<3) || (strlen($login))>20 ){
            $flag = false;
            $_SESSION["e_login"]="Login musi posiadać od 3 do 20 znaków";
        }
        if( !ctype_alnum($login)==true ){
            $flag = false;
            $_SESSION["e_login"]="Login może składać sie tylko z liter i cyfr";
        }
              
        $zapytanie = "SELECT login FROM users where login='$login'";
        $ile = $polaczenie->query($zapytanie);
        
        if($ile->num_rows != 0){
        	$flag=false;
        	$_SESSION["e_login"]="Taki login juz istnieje";
        	$_SESSION["e_login"]="Taki login juz istnieje";
        }
        
//			----------------------------									//

        
//		Walidacja emaila													//

        //sprawdz poprawnosc adresu email
        $email = $_POST["remail"];
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

        if( (filter_var($emailB, FILTER_VALIDATE_EMAIL))==false ||
            ($emailB!=$email)){
            $flag = false;
            $_SESSION["e_email"] = "Podaj poprawny adres email";
        }

//			-----------------------------									//

//		Walidacja hasła														//

        $pass = $_POST["rpassword"];
        $pass2 = $_POST["rpassword2"];

        if( (strlen($pass)<8) || (strlen($pass))>20 ){
            $flag = false;
            $_SESSION["e_pass"]="Hasło musi posiadać od 8 do 20 znaków";
            $_SESSION["e_pass2"]="Hasło musi posiadać od 8 do 20 znaków";
        }
        if( $pass!=$pass2 ){
            $flag = false;
            $_SESSION["e_pass"]="Podane hasła są różne";
            $_SESSION["e_pass2"]="Podane hasła są różne";
        }

//			-----------------------------									//

//		Dodane do bazy po sprawdzeniu flagi									//
        
        if($flag == true){
        	if($polaczenie->connect_errno!=0){
        		echo "Error: ".$polaczenie->connect_errno . " Opis: ".$polaczenie->connect_error;
        	}
        	$pass_hash = password_hash($pass, PASSWORD_DEFAULT);	
        	$sql="insert into users (login,pass,email) values ('$login','$pass','$email')";
        	$polaczenie->query($sql);       	
        }
        
//			------------------------------									//	
    }
	
 
    $polaczenie->close();
    header('Location: index.php');
    

?>

