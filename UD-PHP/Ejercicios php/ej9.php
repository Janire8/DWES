<?php 
/* Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.
 */

 $nota1 = 2;
 $nota2 = 6;

 $media = (($nota1 + $nota2)/2);

 if ($media > 5) {
    echo ("La nota es: " . $media . " " . "Aprobado");
 }elseif ($media < 5) {
    echo ("La nota es: " . $media . " " . "Suspendido");
 }
?>