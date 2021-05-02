<?php
include("connexion.php");
$bdd = connect();

$nom = $_POST["nom"];
$prix = $_POST["prix"];
$image = $_POST["image"];
$image = basename($_FILES["image"]["name"]);
$chemin = "image/" .$image;
move_uploaded_file($_FILES["photos"]["tmp_name"],$chemin);

sql = "INSERT INTO produit(nom,prix,image) values('$nom','$prix','$image')";
$resultat=$bdd->exec($sql);
?>