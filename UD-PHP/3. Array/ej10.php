<?php

/*En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana y asociar a cada día un valor entero. Se trandrá que mostrar en pantalla cada día y valor almacenado en el array así como la suma y media de todos los valores guadados en el array.*/

$dia = [
    "Lunes" =>1,
    "Martes" => 2,
    "Miercoles" => 3,
    "Jueves" => 4,
    "Viernes" => 5,
    "Sabado" => 6,
    "Domingo" => 7
];

$suma = 0;
$total_dias = count($dia);

foreach ($dia as $dia_semana => $valor) {
    $suma += $valor;
}
echo("La suma de los valores es: " . $suma . "<br>");

echo("<br>");

$media = $suma/$total_dias;
echo("La media de los valores es: " . $media . "<br>");
?>