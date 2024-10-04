<?php 
include "Mario.php";
include "Enemigo.php";

$p1 = new Mario ("mario", 50, 80, "lanza llamas");
$p2 = new Luigi("Luigi", 50, 40, 4);
//$pEnemigo = new Koopa ("koopa", 40, 40);

$p1->moverse();
$p1->atacar(50);
$p1->salto();

$p2->atacar(5);

?>