<?php

use Model\Conexion;

class MUsuario extends Conexion
{

    public function getUsers(){
        $query = $this->getCon()->query('SELECT * FROM usuario');
        
        $usuarios = [];
        
        while($fila = $query->fetch_assoc()){
            $usuarios[] = $fila;
        }
    
        return  $usuarios;
    }

    public static function tienePermiso($username, $password, $user)
    {
        if ($username == $user["email"] && $password == $user["contrasena"]) {
            return true;
        }
        return false;
    }
}
