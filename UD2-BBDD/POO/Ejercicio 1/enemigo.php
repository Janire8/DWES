<?php
include_once("Personaje.php");

abstract class Enemigo extends Personaje
{
    private int $poder;

    public abstract function moverse();

    public abstract function atacar(int $strength);
}
