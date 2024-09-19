<?php 
/*Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima.*/

$num = [];
$menor = 0;

for ($i=0; $i < 10; $i++) { 
    $num[$i]=rand(0,99);
};


$menor = 150;

for ($i=0; $i < count($num); $i++) { 
    if ($num[$i] < $menor) {
        $menor = $num[$i];
    }
};

var_dump($num);
"<br>";
echo($menor);
?>