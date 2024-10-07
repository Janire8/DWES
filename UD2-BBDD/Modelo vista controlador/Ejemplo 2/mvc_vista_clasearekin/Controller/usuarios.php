<?php

// Este código importa y requiere los archivos necesarios para el funcionamiento del controlador de usuarios



// Requiere el archivo que contiene la clase Conexion
require(__DIR__ . '/../Model/MUsuario.php');

// Incluye el archivo que contiene la clase VUsuario (Vista de Usuario)
require_once(__DIR__ . '/../Views/VUsuario.php');

$con = new Model\MUsuario();
$usuarios = $con->getUsers();

$vista = new VUsuario();
$vista->inithtml();
$vista->cabecera();
$vista->tablaUsuarios($usuarios);
$vista->endhtml();

?>