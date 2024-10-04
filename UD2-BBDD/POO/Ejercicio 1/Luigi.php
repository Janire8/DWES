<?php
class Luigi extends Personaje implements saltar{
    private int $agilidad;

    public function __construct($nombre, $puntosDeVida, $fuerza, $agilidadL) {

        parent::__construct($nombre, $puntosDeVida, $fuerza);
        $this->agilidad = $agilidadL;
        
    }
    
    public function moverse() {
        echo ("Luigi se mueve");
    }

    public function atacar(int $strength)
    {
        echo "el personaje ataca " . $this->agilidad . "mas que " . $this->nombre;
    }

    public function salto()
    {
        
    }
}

?>