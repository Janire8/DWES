<?php
namespace Prueba2;


class Conect
{
    private $con;

    public function __construct()
    {
        $this->con = new \mysqli('localhost', 'root', '', 'retotienda');

    }

    public function getCon()
    {
        return $this->con;
    }

    public function closeCon()
    {
        $this->con->close();
    }


}

