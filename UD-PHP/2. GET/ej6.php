<?php 
$letras = "";
$numLineas = $_GET['lineas'];

for ($i = 0; $i < $numLineas; $i++) {
    $letras.="o";
    echo $letras . "<br>";
}
?>