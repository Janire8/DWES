<?php
namespace Modelo;

require_once 'Conexion.php';

class MEjemplo extends Conexion {


    public function eliminarEjemplo($id) {
        $sentencia = $this->getCon()->prepare("DELETE FROM ejemplo_tabla WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $sentencia->close();
    }

    /*
        instruccines de ayuda
        $query = $this->getCon()->prepare("DELETE FROM ejemplo_tabla WHERE id = ?");

        $query->bind_param("i", $id);

        $query->execute();
        
        $resultado = $query->get_result();

        $fila = $resultado->fetch_assoc()  

        $query->close();

        $resultado = $this->getCon()->query('SELECT * FROM ejemplo_tabla');
    */


}
