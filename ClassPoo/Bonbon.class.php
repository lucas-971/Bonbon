<?php

class Bonbon extends Sucrerie {

    private $couleur ;
    private $messageManger="miam miam :) " ;
    
    public function __construct($couleur, $nom) {
		parent::__construct($nom) ;
		$this->couleur =$couleur ;
	}



public function manger(){

return “miam miam” ;
}

public function aimer(niveau){

return “J’aime ” . $niveau ;
}
public function getNom(){
    return $this->nom ;
}
public function setNom($nom){
    $this->nom = $nom ;
    return $this->nom ;
}



}
?>