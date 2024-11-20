<?php
namespace Model;
require_once 'Conexion.php';   


class MUsuario extends Conexion {
    public function getUser($username){
       
        $usuario = null;
        $sentencia = $this->getCon()->prepare("SELECT * FROM usuarios WHERE username = ?");
        
        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        
        $resultado = $sentencia->get_result();
        
        if ($fila = $resultado->fetch_assoc()) {
            $usuario = $fila;
        }
        
        $sentencia->close();
        
        return $usuario;
    }
    
    public function getUsers(){
        $query = $this->getCon()->query('SELECT * FROM usuarios');
        
        $usuarios = [];
        
        while($fila = $query->fetch_assoc()){
            $usuarios[] = $fila;
        }
    
        return  $usuarios;
    }

   
    
    public function insertUsuario($usuario){
        $sentencia = $this->getCon()->prepare("INSERT INTO usuarios(username, password, nombre) VALUES (?,?,?)");
        
        $sentencia->bind_param("sss", $usuario["username"], $usuario["password"], $usuario["nombre"]);
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function eliminarUsuario($username){
        $sentencia = $this->getCon()->prepare("DELETE FROM usuarios WHERE username = ?");
        
        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function modificarUsuario($usuario){
        $sentencia = $this->getCon()->prepare("UPDATE usuarios SET password = ?, nombre = ? WHERE username = ?");
        
        $sentencia->bind_param("sss", $usuario["password"], $usuario["nombre"], $usuario["username"]);
        
        $sentencia->execute();
        $sentencia->close();
    }

}
