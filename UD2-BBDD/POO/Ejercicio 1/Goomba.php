<?php

class Goomba extends Personaje {
    private int $velocidad;

    
    public function moverse() {
        echo ("Goomba camina en linea recta");
    }

    public function atacar(int $strength)
    {
        echo ("Goomba ataca con fuerza" . $strength);
    }

}

?>