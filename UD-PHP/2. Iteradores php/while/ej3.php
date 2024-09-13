<?php
/*Definir una variable llamada “pares” y asignarle un valor booleano.
Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor que 99.

si se le ha asignado el valor FALSE a la variable pares en la pantalla tienen que aparecer los valores impares.
 */
$pares = true;
$i = 1;
$maximo = rand (1,99);

while ($i <= $maximo) {
    if ($i % 2 == 0) {
        echo ($i . "<br>");
    }
    $i++;
}
