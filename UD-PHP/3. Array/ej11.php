<?php
/*Crea un array asociativo y ordenalo dependiendo del key y del valor.
Para ello has de utilizar las funciones ksort y natsort.*/

echo("<h2>Array asociativo</h2>");

$nombre = [
    "jordi" => "jordi rubio",
    "marta" => "marta fabra",
    "eva" => "eva palacio",
    "toni" => "antonio comas",
    "emilio" => "emilio morales",
    "fco" => "francisco cascales"
];

echo("<h2>Array</h2>");

foreach ($nombre as $nombre_apellido => $valor) {
    echo("$nombre_apellido: $valor <br>");
}
echo("<br>");

echo("<h2>Array ksort</h2>");
ksort($nombre);
foreach ($nombre as $nombre_apellido => $valor) {
    echo("$nombre_apellido: $valor <br>");
}

echo("<br>");

echo("<h2>Array natsort</h2>");
natsort($nombre);
foreach ($nombre as $nombre_apellido => $valor) {
    echo("$nombre_apellido: $valor <br>");
}

?>