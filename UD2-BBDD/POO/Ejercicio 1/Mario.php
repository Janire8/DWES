<?php
include "Personaje.php";
include "saltar.php";
include "Koopa.php";

class Mario extends Personaje implements saltar{
    private $habilidadEspecial;

    public function __construct($nombre, $puntosDeVida, $fuerza, $habEspe) {

        parent::__construct($nombre, $puntosDeVida, $fuerza);
        $this->habilidadEspecial = $habEspe;
        
    }

    public function moverse() {
        echo $this->nombre . " se mueve";
    }

    public function atacar(int $strength)
    {
        echo "ataca sobre " . $this->nombre;
    }

    public function salto()
    {
        echo "El personaje salta";
    }
}

?>