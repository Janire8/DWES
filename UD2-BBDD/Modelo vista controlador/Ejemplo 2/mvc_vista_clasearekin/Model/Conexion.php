<?php
namespace Model;


class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'instagram_mvc');
        
    }

    public function getCon(){
        return $this->con;
    }

    public function closeCon(){
        $this->con->close();
    }   

 
}

