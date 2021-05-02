<?php
$variable=$_GET["choix"];

require_once('session-verif.php');


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
  <h1> Bonjour <?php echo $login ?></h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<form name="formulaire" action="post.php" method="Post">
  
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
    <a class="dropdown-item" href="#">Supprimé</a>
  </div>
</div>
<a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Déconnexion</a>
  <div class = "container">
	<div class = "row justify-content-center" >
  
	
	</div>
  </div>
  <div class="container">
  <div class="row center">
  <div class="cold-md-6">
  <form method="POST" action="ajout_securise.php" enctype='multipart/form-data'>
    <div class="form-group">
        <label for="formGroupExempleInput">Nom du produit</label>
        <input type="texte" class="form_control" id="formGroupExempleInput" placeholder="nom du bonbon" name="nom">
    </div>
    <div class="form-group">
    <label for="formGroupExempleInput">Prix du produit</label>
    <input type="texte" class="form_control" id="formGroupExempleInput2" placeholder="prix du bonbon" name="prix">
    <br><br>
    <label for="formGroupExempleInput">Image du produit</label>
    <input type="file" name="photo" accept="image/png, image/jpg">
    <br><br>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
     </div>
            </div>
         </div>   
   </div>


  
  </body>
</html>