<?php
    session_start();
    include_once 'head.php';
    include_once 'function.php';
    if(isset($_SESSION['login'])){
        header('Location: default_panel.php');
    }
?>

<!-- Funkcja onload sprawdzająca czy wyświetlić ponownie okno rejestracji w przypadku podania błędnych danych w formularzu -->
<body xmlns="http://www.w3.org/1999/html" <?php onload("flag");?>> 

		<!-- Okno rejestracji -->
		<div class="jumbotron" id="o_rej">
		

			<!-- Formularz -->
			<form method="post" action="register.php">
				<h3>Rejestracja</h3>
	            <input type="text" name="rlogin" placeholder="Login" class="form-control"<?php erro("e_login");?>/><br>           
	            <input type="password" name="rpassword" placeholder="Hasło" class="form-control"<?php erro("e_pass");?>/><br>          
	            <input type="password" name="rpassword2" placeholder="Powtórz hasło" class="form-control"<?php erro("e_pass2");?>/><br>        
	            <input type="text" name="remail" placeholder="Email" class="form-control"<?php erro("e_email");?>/><br>
	            <input type="checkbox" name="regulamin" id="check"/><label for="check">Akceptuj regulamin</label>
	            <input type="submit" class="btn btn-primary btn-lg" value="Załóż konto" />
	        </form>
	        <!-- Formularz END -->
        </div>
        <!-- Przeciemnione tło -->
        <div id="tlo"></div>
        <!-- Okno rejestracji END-->


    <div id="wrapper" style="z-index: 1">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="jumbotron" id="reg">
                    <h1>Testowa</h1>
                    <p>Załóż swoje konto</p>
                    <input type="submit" class="btn btn-primary btn-lg" value="Zarejestruj się" id="register"/>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="jumbotron" id="reg">
                    <h3>Zaloguj się</h3>
                    <form method="post" action="login.php">

                        <input type="text" name="login" placeholder="Login" class="form-control" required/><br/>
                        <input type="password" name="password" placeholder="Hasło" class="form-control" required/><br/>
                        <input type="submit" class="btn btn-primary btn-lg" value="Zaloguj się" />

                    </form>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>

