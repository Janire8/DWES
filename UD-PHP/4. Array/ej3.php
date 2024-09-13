<?php
$rebaja = 20;

$productos = array ('adidas', 'nike', 'new balance', 'puma', 'rebook');

$precios = array (150, 120, 80, 90, 70);

$resultado = array_combine($productos, $precios);

print_r($resultado);
for ($i=0; $i < count($precios); $i++) { 
    $resultadoRebaja = (($rebaja * $precios)/100);
}
?>