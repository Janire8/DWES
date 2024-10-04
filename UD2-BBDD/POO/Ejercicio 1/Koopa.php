<?php
include "Enemigo.php";

class Koopa extends Enemigo {
    private bool $esCaparazonVerde = true;

    
    public function moverse() {
        if ($this->esCaparazonVerde == true){
            echo("Se cae");
        
        }else{
            echo("No se cae");
        }
    }

    public function atacar(int $strength)
    {
        
    }
}

?>