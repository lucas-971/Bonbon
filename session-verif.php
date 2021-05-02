<?php


if(isset($_SESSION['aurorise']) || !$_SESSION['autorise']){
    header("location:index.php.php?error=3");
}
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '' ; 



?>