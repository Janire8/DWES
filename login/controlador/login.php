<?php

require_once __DIR__ . '/../modelo/MUsuario.php';
require_once __DIR__ . '/../vista/Vista.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = $con->getUsers();

if(MUsuario::tienePermiso($username, $password, $user)){

    session_start();
    $_SESSION['usuario_logueado'] = $username;
    header("Location: desktop.php");

}else{
    
    // header("Location: loginForm.php");
    echo "<script type='text/javascript'>
            alert('El usuario es incorrecto. Por favor, inténtalo de nuevo.');
          </script>";
}

