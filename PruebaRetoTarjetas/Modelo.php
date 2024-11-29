<?php
// Incluir el controlador
require_once 'controlador/ProductoController.php';

use controlador\ProductoController;

// Instanciamos el controlador y mostramos la vista
$productoController = new ProductoController();
$productoController->mostrarVista();
?>
