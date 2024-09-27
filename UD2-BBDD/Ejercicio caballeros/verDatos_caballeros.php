<?php
$mysqli = new mysqli("localhost", "root", "", "caballeros");

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM caballeros");

// mostrar resultado
while ($row = $resultado->fetch_assoc()) {
    echo($row['id'] . " - " . $row['nombre'] . " - ". $row['fuerza']. " - ". $row['ataque']. " - ". $row['defensa']. " - ". $row['experiencia']. " - ". $row['fecha_nacimiento']. " - ". $row['activo']);
    echo "<br>";
}

/* se recomienda el cierre explícito */
$mysqli->close();

?>
<br>