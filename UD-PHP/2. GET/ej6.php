<?php 
$numLineas = 0;
$letras = "";
$numLineas = $_GET['numero de lineas'];

for ($i = 0; $i < 10; $i++) {
    $letras.="o";
    echo $letras . "<br>";
}
echo $_GET["NUMERO DE LINEAS"]; 
?>