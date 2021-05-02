<?php



session_start();
$id = $_GET["id"];
if(!isset($_SESSION['panier']))
{
$_SESSION['panier'] =array(); // création de la variable de session
}
if(isset($_SESSION['panier'][$id]))
{
$_SESSION['panier'][$id]++ ; //ajoute 1 à la quantité
}
else
{
$_SESSION['panier'][$id]=1 ; // sinon met un dans la quantité
}
$_SESSION['succes']="le produit a été ajouté au panier !" ;

header("Location:index.php");


  
 





?>