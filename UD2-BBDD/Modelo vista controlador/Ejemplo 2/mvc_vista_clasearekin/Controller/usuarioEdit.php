<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Views/VUsuario.php');

$username = $_GET['username'];

$mUsuario = new Model\MUsuario();
$usuario = $mUsuario->getUser($username);

$vista = new VUsuario();
$vista->inithtml();
$vista->formEditUsuario($usuario);
$vista->endhtml();

?>
