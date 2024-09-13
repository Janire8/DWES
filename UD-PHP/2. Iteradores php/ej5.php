<?php
/* Crear un programa que imprima la figura de un triángulo rectángulo de 10 líneas ajustada a la izquierda, formada por letras “o”. 
*/

$lineas = 0;
$letras = "";
$cont = 0;

for ($i = 0; $i < 10; $i++) {
    $letras.="o";
    echo $letras . "<br>";
}
