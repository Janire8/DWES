<?php

$numeros = [];

for ($i = 0; $i < 50; $i++) {
    $numeros[$i] = rand(0,49);
}

$frecuencia = array_count_values($numeros);

echo "<h3>Números aleatorios:</h3>";

foreach ($numeros as $numero => $frecuencia) {
    //echo "$numero: $frecuencia <br>";
    echo "El numero: " . $numero . " ha salido: " . $frecuencia . " veces." . "<br>";
}


?>