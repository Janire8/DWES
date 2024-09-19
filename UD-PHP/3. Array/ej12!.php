<?php

$numeros = [];

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(0, 49);
}

$frecuencia = array_count_values($numeros);

echo "<h3>Números aleatorios:</h3>";

foreach ($frecuencia as $numero => $contador) {
    echo "El numero: " . $numero . " ha salido: " . $contador . " veces." . "<br>";
}


?>