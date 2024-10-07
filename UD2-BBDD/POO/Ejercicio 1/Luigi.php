<?php
include_once ("Personaje.php");

class Luigi extends Personaje implements saltar{
    private string $agilidad;

    public function __construct($nombre, $puntosDeVida, $fuerza, $agilidadL) {

        parent::__construct($nombre, $puntosDeVida, $fuerza);
        $this->agilidad = $agilidadL;
        
    }
    
    public function moverse() {
        echo ("Luigi se mueve con " . $this->agilidad);
    }

    public function atacar(int $strength)
    {
        echo "el personaje ataca " . $this->agilidad . "mas que " . $this->nombre;
    }

    public function salto()
    {
        echo "salta con mayor altura";
    }
}

?>