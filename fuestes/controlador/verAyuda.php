<?php
// Ejemplo de importacion y uso

use Modelo\MAyudas;
use Vista\Vista;

require_once '../modelo/MAyudas.php';
require_once '../vista/Vista.php';
$id = $_GET['id'];

// $m = new MAyudas();

$vista = new Vista();
$vista->initHTML();


$vista->endHTML();

Vista::mostraTitulo("Un titulo $id");

