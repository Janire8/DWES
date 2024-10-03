<?php
include("Personaje.php");

class Enemigo extends Personaje
{
    public $poder;

    public function __construct($nombre, $puntosDeVida, $fuerza, $poder)
    {
        parent::__construct($nombre, $puntosDeVida, $fuerza);
        $this->poder = $poder;

    } 
        
    
}
