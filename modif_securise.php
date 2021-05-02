<?php 
session_start();
include "connexion.php";
$connexion=connexionPDO();

$id = $_SESSION["choix"];
$nom =$_POST["nom"]; 
$prix =$_POST["prix"];  
$photo =basename($_FILES["photo"]["name"]);
$chemin='image/'.$photo;
move_uploaded_file($_FILES["photo"]["tmp_name"],$chemin);
$sql="UPDATE produit SET 
nom ='$nom',
prix = '$prix',
photo = '$photo'
where id = '$id'";

$resultat=$connexion->exec($sql);

header("location:index.php");


?>
    