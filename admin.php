<?php
session_start();

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<?php 
	require "connexion.php";
	$connexion=connexionPDO();
	?>

    <title>LISTE DE BONBONS</title>
  </head>
  <body style = "background-color:#ffa07a ">
  <center>  <h1>LISTE DE BONBONS</h1> </center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	

  	<form name="formulaire" >
  <nav class="navbar navbar-light  style="background-color: #e3f2fd;">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" name="recherche" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
</nav>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Plus d'option
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="ajouter.php">Ajouter</a>
    <a class="dropdown-item" href="modifier.php">Modifier</a>
    <a class="dropdown-item" href="supprimer.php">Supprimé</a>
  </div>
</div>

  <div class = "container">
	<div class = "row justify-content-center" >
  <?php
  if(isset($_SESSION['login']))
	{
		echo"Vous etes connecté en tant que : " . $_SESSION['login'];
	}
	else
	{
		?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">


				<form class="login100-form validate-form" action="verif.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="login" placeholder="Enter login">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="mdp" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<div class="g-recaptcha" data-sitekey="6Le3mf0UAAAAALWRhCfiz4bPKMubaUjoxG-2QhUV"></div>
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name='submit'>
							Login
						</button>
						<a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Déconnexion</a>
					</div>
				</form>
			</div>
		</div>
	</div>
   <?php
   }
   ?>


  
  </body>
</html>


