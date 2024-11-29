<?php

class MUsuario
{
    public static function tienePermiso($username, $password)
    {
        if ($username == "admin" && $password == "admin") {
            return true;
        }
        return false;
    }
}
