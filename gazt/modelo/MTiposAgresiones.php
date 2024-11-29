<?php

namespace Modelo;
//metodos que accedan principalmente a tipos_agresiones

require_once 'Conexion.php';

class MTiposAgresiones extends Conexion
{
    public function mostrarTiposAgresiones($id)
    {
        //Consulta para mostrar los tipos de agresiones
        $query = $this->getCon()->prepare('SELECT * FROM tipos_agresiones WHERE id = ?');
        $query->bind_param("i", $id);
        $query->execute();

        //Crear array vacío para llenarlo con la información proveniente de la BBDD
        $tiposAgresiones = [];
        //echo($tiposAgresiones);

        $resultado = $query->get_result();
        
        while ($resultado <= $tiposAgresiones) {
           $fila = $resultado->fetch_assoc(); 
        }
        
        return $fila;
        $resultado->close();
    }

    public function eliminarTiposAgresiones() {
        $sentencia = $this->getCon()->prepare("DELETE FROM tipos_agresiones WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $sentencia->close();
    }
}