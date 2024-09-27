<?php
if (isset($_GET['nombre']) && isset($_GET['fuerza']) && isset($_GET['ataque']) && isset($_GET['defensa']) && isset($_GET['experiencia']) && isset($_GET['fecha_nacimiento']) && isset($_GET['activo'])) {

    $nombre = $_GET['nombre'];
    $fuerza = $_GET['fuerza'];
    $ataque = $_GET['ataque'];
    $defensa = $_GET['defensa'];
    $experiencia = $_GET['experiencia'];
    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    $activo = $_GET['activo'];

    $mysqli = new mysqli("localhost", "root", "", "caballeros");

    $sentencia = $mysqli->prepare("INSERT INTO caballeros(nombre, fuerza, ataque, defensa, experiencia, fecha_nacimiento, activo) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $sentencia->bind_param("siiiisi",  $nombre, $fuerza, $ataque, $defensa, $experiencia, $fecha_nacimiento, $activo);

    $sentencia->execute();

    $sentencia->close();

    header("Location: index.php");
} else {
    echo ("<br>Error en parametros<br>");
    var_dump($_GET);
}
