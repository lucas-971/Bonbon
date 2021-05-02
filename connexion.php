<?php

function connexionPDO()
{
	include_once("bdd.php");
	
	try
	{
		$connexionPDO = new PDO('mysql:host='.HOST.';dbname=' .BASE, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
	}
	catch(PDOException $exception)
	{
		echo "Echec de la connexion ".$exception->getMessage();
		
	}
	return $connexionPDO;
}
 function securiser($donnees){
	$donnees = trim($donnees);
	$donnees = stripslashes($donnees);
	$donnees = htmlspecialchars($donnees);
	return $donnees;
}
?>