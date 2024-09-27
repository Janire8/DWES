<?php
if (isset($_GET['id']) && isset($_GET['nombre'])) {
    $id= $_GET['id'];
    $nombre = $_GET['nombre'];

    $mysqli = new mysqli("localhost", "root", "", "caballeros");

    $sentencia = $mysqli->prepare("UPDATE caballeros SET nombre=? WHERE id=?");

    $sentencia->bind_param("si", $nombre, $id);
    
    $sentencia->execute();

    $sentencia->close();
    

    header("Location: index.php");
}else{
    echo("<br>Error en parametros<br>");
}