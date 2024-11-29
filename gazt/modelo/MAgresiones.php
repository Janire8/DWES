<?php

namespace Modelo;
//metodos que accedan principalmente a agresiones

require_once 'Conexion.php';

class MAgresiones extends Conexion
{


    public function añadirAgresion($id)
    {
        $sentencia = $this->getCon()->prepare("INSERT FROM agresiones WHERE id = ? id_tipo = ? descripcion = ? contacto = ?");
        $sentencia->bind_param("iiss", $id, $id_tipo, $descripcion, $contacto);
        $sentencia->execute();
        $sentencia->close();
    }

    public function eliminarAgresion($id) {
        $sentencia = $this->getCon()->prepare("DELETE FROM agresiones WHERE id = ?");
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
