
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mysqli = new mysqli("localhost", "root", "", "caballeros");

    $sentencia = $mysqli->prepare("DELETE FROM caballeros WHERE id=?");

    $sentencia->bind_param("i", $id);

    $sentencia->execute();

    $sentencia->close();

    header("Location: index.php");
} else {
    echo ("<br>Error en parametros<br>");
}
