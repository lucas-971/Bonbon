<?php
  extract($_POST);
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
  <body style = "background-color:#E6E6FA ">
  <center>  <h1>LISTE DE BONBONS</h1> </center>

 <nav class="navbar navbar-light  style="background-color: "#e3f2fd;">
  <form class="form-inline" action="" method="Post">
    <input class="form-control mr-sm-2" type="search" placeholder="rechercher" name="recherche" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
	 </form>
 </nav>


  <div class = "container">
	<div class = "row justify-content-center" >
  
	<?php 
	$rechercher = securiser(strtoupper($_POST["recherche"]));
	$sql="select * from produit
	where nom LIKE lower('".$recherche."%')  ";
	$resultat=$connexion->query($sql);
	while($produit = $resultat ->fetch(PDO::FETCH_OBJ)){
	
		// echo "<tr> <td>".$produit->nom."</td><td>" .$produit->prix."€</td><td> <img src='images/".$produit->photo."'></td></tr>";
		
		echo"
				<div class='card' style='width: 18rem;'>
		  <img src='images/".$produit->photo."' class='card-img-top' alt='Bonbons'>
		  <div class='card-body'>
			<h5 class='card-title'> $produit->nom </h5>
			<p class='card-text'> Le prix est de : $produit->prix € </p>
			 <button type='button' class='btn btn-success'>Acheter</button>
		  </div>
				</div>
		" ;
	}
	?>
	</div>
  </div>
  
  </body>
</html>