<?php
// importacion y uso

use Modelo\MAgresiones;
use Modelo\MTiposAgresiones;
use Vista\Vista;
use Vista\VistaAgresion;

require '../modelo/MTiposAgresiones.php';
require_once '../modelo/MAgresiones.php';
require_once '../vista/Vista.php';
require_once '../vista/VistaAgresion.php';

//$id = $_GET['id'];

//Consultas a la base de datos
$modelo = new MTiposAgresiones();
$modelo->mostrarTiposAgresiones($id);


//Crear objetos vista
$vista = new Vista();
$vistaA = new VistaAgresion();

//Llamada a las funciones de sus respectivos objetos
$vista->inicioHTML();
$vistaA->mostrarVista($tiposAgresiones);
$vista->finalHTML();

//Vista::mostraTitulo("Un titulo $id");

