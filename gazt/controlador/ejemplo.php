<?php
// Ejemplo de importacion y uso

use Modelo\MAgresiones;
use Vista\Vista;

require_once '../modelo/MAgresiones.php';
require_once '../vista/Vista.php';
$id = $_GET['id'];

// $m = new MAyudas();

Vista::mostraTitulo("Un titulo $id");

