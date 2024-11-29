<?php
namespace Modelo;


class Conexion
{
    protected $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'examen');
        
    }

    public function getCon(){
        return $this->con;
    }

    public function closeCon(){
        $this->con->close();
    }   

 
}

