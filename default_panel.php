<?php 
	require_once 'head.php';
	session_start();
	if(!(isset($_SESSION['login']))){
		header('Location: index.php');
	}
?>

<body xmlns="http://www.w3.org/1999/html">
	<div id="addfolder">
		Test Test
	</div>
	<!-- Przeciemnione tło -->
	<div id="tlo"></div>
    
    	<div class="jumbotron" id="man_panel">
			<div id="butony">
    		<input type="submit" class="btn btn-primary btn-lg" value="Dodaj folder" id="addfolderbtn"/>
    		<input type="submit" class="btn btn-primary btn-lg" value="Usuń folder" />
    		<input type="submit" class="btn btn-primary btn-lg" value="Dodaj zdjęcia" />
    		<input type="submit" class="btn btn-primary btn-lg" value="Usuń zdjęcia" />
			<a href="logout.php" type="submit" class="btn btn-primary btn-lg">Wyloguj się</a>
			</div>
    	</div>
    	
    	<div class="jumbotron" id="folder_panel">
			<div id="kon" class=".scrollbar">
				<ul>
					<li>
						<div class="cube" id="1">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 1</h2>
						<div class="control">
							<img id="img1" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<li>
						<div class="cube" id="2">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 2</h2>
						<div class="control">
							<img id="img2" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<li>
						<div class="cube" id="3">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 2</h2>
						<div class="control">
							<img id="img3" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<li>
						<div class="cube" id="4">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 2</h2>
						<div class="control">
							<img id="img4" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<li>
						<div class="cube" id="5">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 2</h2>
						<div class="control">
							<img id="img5" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<li>
						<div class="cube" id="6">
							<div class="parent">
								<div class="front"></div>
								<div class="back"></div>
								<div class="left"></div>
								<div class="right"></div>
								<div class="top"></div>
								<div class="bottom"></div>
							</div>
						</div>
						<h2>Folder 2</h2>
						<div class="control">
							<img id="img6" src="css/redx.png">
							<img src="css/plus.png">
						</div>
					</li>
					<img class="plus" src="css/plus.png">
				</ul>
			</div>
    	</div>
    </body>
</html>