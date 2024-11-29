<?php
// importacion y uso

use Modelo\MAgresiones;

use Vista\Vista;
use Vista\VistaAgresion;

require_once '../modelo/MAgresiones.php';
require_once '../vista/Vista.php';
require_once '../vista/VistaAgresion.php';

//Recoger y guardar en variable el input del formulario
$id = $_GET['id'];
$id_tipo = $_GET['id_tipo'];
$descripcion = $_GET['descripcion'];
$contacto = $_GET['contacto'];

//Consultas a la base de datos
$modelo = new MAgresiones();
$modelo->añadirAgresion($id);
$modelo->eliminarAgresion($id);

//Crear objetos vista
$vista = new Vista();
$vistaA = new VistaAgresion();

//Llamada a las funciones de sus respectivos objetos
$vista->inicioHTML();
$vistaA->vistaAñadir();
$vista->finalHTML();

//Vista::mostraTitulo("Un titulo $id");

