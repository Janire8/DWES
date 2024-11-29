<?php 

abstract class Personaje{

    protected string $nombre;
    protected int $puntosDeVida;
    protected int $fuerza;

    public function __construct($nombre, $puntosDeVida, $fuerza) {

        $this->nombre = $nombre;
        $this->puntosDeVida = $puntosDeVida;
        $this->fuerza = $fuerza;
        
    }

    protected abstract function moverse();
    protected abstract function atacar(int $strength);
    protected function recibirDano (int $dano){}
}


?>