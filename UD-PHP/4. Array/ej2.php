<?php
$productos = array ('adidas', 'nike', 'new balance', 'puma', 'rebook');

$precios = array (150, 120, 80, 90, 70);

$resultado = array_combine($productos, $precios);

print_r($resultado);

?>