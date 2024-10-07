<?php 
include_once ("Mario.php");
include_once ("Enemigo.php");
include_once ("Luigi.php");

$p1 = new Mario ("mario", 50, 80, "lanza llamas");
$p2 = new Luigi("Luigi", 50, 40, 4, "movimiento especial");
//$pEnemigo = new Koopa ("koopa", 40, 40);

//MARIO
$p1->moverse();
echo("<br>");
$p1->atacar(50);
echo("<br>");
$p1->salto();
echo("<br>");

//LUIGI
$p2->atacar(5);
echo("<br>");
$p2->moverse();

?>