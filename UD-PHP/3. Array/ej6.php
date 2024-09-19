<?php 
/*Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la media*/

$num = [];
$media = 0;

for ($i=0; $i < 10; $i++) { 
    $num[$i]=rand(0,99);
};

for ($i=0; $i < count($num); $i++) { 
   $media += $num[$i];
};
$media = $media/count($num);


echo("La media de los numeros es: " . $media . "<br>");

var_dump($num);
?>