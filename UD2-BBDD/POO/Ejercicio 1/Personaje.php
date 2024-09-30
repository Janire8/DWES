<?php 
class Personaje {

    public $nombre;
    public $puntosDeVida;
    public $fuerza;

    public function __construct($nombre, $puntosDeVida, $fuerza) {

        $this->nombre = $nombre;
        $this->puntosDeVida = $puntosDeVida;
        $this->fuerza = $fuerza;
        
    }

    abstract public function moverse();
}

$personaje1 = new Personaje("Mario", 12, 5);
var_dump($personaje1->nombre);
var_dump($personaje1->puntosDeVida);
var_dump($personaje1->fuerza);

?>