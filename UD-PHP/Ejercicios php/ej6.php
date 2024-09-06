<?php 
/* Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario: Ejemplo:
Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
Numero1=1; numero2=2 —>“ el producto es mayor que la suma”
*/

$num1 = 2;
$num2 = 4;

if ($num1 + $num2 > $num1 * $num2) {
    echo ("la suma es mayor que el producto <br>");
} else {
    echo ("el producto es mayor que la suma");
}
?>