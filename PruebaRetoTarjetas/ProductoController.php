<?php
namespace controlador;

use modelo\Conect;

class ProductoController
{
    private $conexion;

    public function __construct()
    {
        // Instanciamos el modelo de la base de datos
        $this->conexion = new Conect();
    }

    public function obtenerProductos()
    {
        // Realizamos la consulta SQL para obtener los 10 productos
        $sql = "SELECT nombre, descripcion, imagen FROM productos LIMIT 10";
        $resultado = $this->conexion->getCon()->query($sql);

        // Comprobamos si la consulta devolvió resultados
        if ($resultado->num_rows > 0) {
            $productos = [];
            while ($producto = $resultado->fetch_assoc()) {
                $productos[] = $producto;
            }
            return $productos;
        }

        return [];
    }

    public function mostrarVista()
    {
        $productos = $this->obtenerProductos();
        include 'vista.php'; // Incluir la vista y pasarle los productos
    }

    public function __destruct()
    {
        // Cerramos la conexión cuando ya no se necesite
        $this->conexion->closeCon();
    }
}
?>
