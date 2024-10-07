<?php
//Llamada al modelo
require_once("modelo/personas_modelo.php");
$per = new personas_modelo();
$datos = $per->get_personas();
//Llamada a la vista
require_once("vistas/personas_vista2.php");
?>