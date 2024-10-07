<?php
include_once ("Personaje.php");
include_once ("saltar.php");
include_once ("Koopa.php");

class Mario extends Personaje implements saltar{
    private $habilidadEspecial;

    public function __construct($nombre, $puntosDeVida, $fuerza, $habEspe) {

        parent::__construct($nombre, $puntosDeVida, $fuerza);
        $this->habilidadEspecial = $habEspe;
        
    }

    public function moverse() {
        echo $this->nombre . " se mueve";
    }

    public function atacar(int $fuerza){
        echo "ataca sobre enemigo con fuerza $fuerza"  ;
    }

    public function salto(){
        echo "El personaje salta";
    }
}

?>