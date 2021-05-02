<?php 
session_start();
include "connexion.php";
$connexion=connexionPDO();


$choix = $_GET['choix'];

$sql="DELETE from produit where  id = '$choix'";

$resultat=$connexion->query($sql);

header("location:index.php");

?>
    