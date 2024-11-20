<?php
// Ejemplo de importacion y uso

use Modelo\MAyudas;
use Vista\Vista;
use Vista\VistaAyudas;

require '../modelo/MAyudas.php';
require_once '../vista/Vista.php';
require_once '../vista/VistaAyudas.php';
$id = $_GET['id'];

// $m = new MAyudas();
$vista = new Vista();
$vistaA = new VistaAyudas();

$con = new modelo\MAyudas();

$ayudas = $con->añadirAyuda();

$vista->initHTML();

$vistaA->verAñadirMaterial();

$vista->endHTML();

Vista::mostraTitulo("Un titulo $id");

