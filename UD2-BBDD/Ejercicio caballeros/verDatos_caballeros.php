<?php

$mysqli = new mysqli("localhost", "root", "", "caballeros");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

    $sentencia = $mysqli->prepare("SELECT * FROM caballeros WHERE id = ?");
    $sentencia->bind_param("i", $id);

    $sentencia->execute();
   // $resultado = $sentencia->get_result();

    if ($row = $sentencia->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Fuerza: " . $row['fuerza'] . "<br>";
        echo "Ataque: " . $row['ataque'] . "<br>";
        echo "Defensa: " . $row['defensa'] . "<br>";
        echo "Experiencia: " . $row['experiencia'] . "<br>";
        echo "Fecha de Nacimiento: " . $row['fecha_nacimiento'] . "<br>";
        echo "Activo: " . ($row['activo'] ? "Sí" : "No") . "<br>";
    }

    $sentencia->close();

?>

