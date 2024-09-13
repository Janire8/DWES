<?php 
/*Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
*/

$llamada = 3;

if ($llamada <= 3) {
    echo ( "El precio es de 10 centimos");
}elseif ($llamada > 3) {
    echo ("El precio es: " . (10 + (($llamada-3) * 5)) . "centimos");
}
?>