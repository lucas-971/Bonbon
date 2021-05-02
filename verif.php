<?php
session_start();


require "connexion.php";
$connexion=connexionPDO();

requiere("../recaptcha/autoload.php");

$secret="6Le3mf0UAAAAAIOQ0ChniePMuJ1LXM1Sh0kTIk_k";



$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-reponse"]);
if ($resp->isSuccess()) {
    // Verified!



if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $mdp  = md5($_POST['mdp']);

    

    $sql = "SELECT * from admin WHERE login = '$login' and  mdp = '$mdp' ";
    $resultat=$connexion->query($sql);
    $admin = $resultat ->fetch(PDO::FETCH_OBJ);
	
    

    if($resultat->rowCount() > 0)
    {
        
            echo "Connexion effectuée";
            $_SESSION['login'] = $login ;
            $_SESSION['password'] = $mdp;
            $_SESSION['autorise'] = "ok";

        }


else
{
    $mdp= password_hash($mdp, PASSWORD_DEFAULT);
    $sql ="INSERT INTO user (login, mdp) VALUES ('$login','$mdp')";
    $req = $connexion->prepare($sql);
    $req->execute();
    echo"Enregistrement effectué";


}

}
}
?>