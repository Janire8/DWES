<?php
/* Guarda en un array 10 números y saca el número más grande de todos ellos */

$num = [1, 5, 12, 25, 37, 50, 80, 90, 100, 110];
$mayor = 0;

for ($i=0; $i < count($num); $i++) { 
    if ($num[$i] > $mayor) {
        $mayor = $num[$i];
    }
};

echo($mayor);
?>