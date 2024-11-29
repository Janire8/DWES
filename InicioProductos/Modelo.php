<?php 

namespace InicioProductos;

use modelo\Conect;

require_once "Conexion.php";

class Modelo extends Conect{
   public function getProductos() {
    $query = $this->getCon()->query('SELECT nombre, descripcion, imagen FROM productos');

    $productos = [];
   }
}

?>