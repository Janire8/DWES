<?php 
/*Hasta ahora para visualizar el contenido de una variable hemos utilizado echo o print. En el caso de los arrays se puede utilizar la orden print_r($array) para visualizar el contenido del array junto con su índice. 
Se debe realizar un programa que cree un array con 10 números aleatorios (números entre 1 y 200) los imprima de las dos formas que aparecen en pantalla y después los imprima al revés.*/

$num = [];
$media = 0;

for ($i=0; $i < 10; $i++) { 
    $num[$i]=rand(1,200);
};
echo("Array num mostrando los índices");echo("<br>");
print_r($num);
echo("<br>");

echo("Array num sin mostrar los índices");echo("<br>");
foreach ($num as $valores) {
    echo $valores . " ";
}
echo("<br>");

echo("Array num invertido mostrando los índices");echo("<br>");
$num_invertido = array_reverse($num);
var_dump($num_invertido);
echo("<br>");

echo("Array num invertido sin mostrar los índices");
echo("<br>");
foreach ($num_invertido as $valor) {
    echo $valor . " ";
}
?>