<?php 

require "connexion.php";
$connexion=connexionPDO();

$nom = $_POST["nom"];
$prix = $_POST["prix"];  
$dossier = 'Images/';
$photo = basename($_FILES['image']['name']);

// Création d'une liste blanche des extensions autorisées
$controle_extensions_autorisees = ['jpg', 'png', 'gif', 'jpeg'];

// Récupération de l'extension du fichier
$fichier_extension =  strtolower(pathinfo($photo, PATHINFO_EXTENSION));
 
//Début des vérifications de sécurité...
if(!in_array($fichier_extension, $controle_extensions_autorisees)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
}


// Définition de la taille maximale autorisée à 100Ko, soit 100000 octets
$controle_taille_maximum = 100000;

$fichier_upload_taille = $_FILES['image']['size'];

if($fichier_upload_taille > $controle_taille_maximum){
   $erreur= 'La taille du fichier est de '.$fichier_upload_taille.' et dépasse la taille autorisée de '.$controle_taille_maximum;
}



if(!isset($erreur) && empty($erreur)) //S'il n'y a pas d'erreur, on upload
{
// Exemple : on génère une chaîne aléatoire avec hash()
$nouveau_nom = hash('sha256', (microtime().$photo)).'.'.$fichier_extension;

$chemin_destination = $dossier . $nouveau_nom;
$resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination);

}
else
{
echo $erreur ;
}

$sql="INSERT INTO produit (nom,prix,photo)VALUES ('$nom','$prix','$photo')";
$resultat=$connexion->exec($sql);
header("location:index.php");

?>