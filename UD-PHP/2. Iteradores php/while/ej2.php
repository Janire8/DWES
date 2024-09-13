<?php
/*Mostrar en pantalla números pares del 100 al 1
Con While y con <For></For>*/

$i = 1;

while (1 <= $i && 100 >= $i) {
    if ($i % 2 == 0) {
        echo $i;
        echo "<br>";  
    }
    $i++;
}
