<?php
include "Sucrerie.class.php" ;
class Chien {

    public $race = "caniche";
    public $couleur = "blanc";
    public $sexe = "femelle";

    public function manger ($cri){
        $this->cri = $cri ;
        return $this->cri
    }
}



?>