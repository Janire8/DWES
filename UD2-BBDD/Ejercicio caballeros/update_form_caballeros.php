<?php
$id=$_GET['id'];
$mysqli = new mysqli("localhost", "root", "", "caballeros");
$resultado = $mysqli->query("select * from caballeros where id=" .$id);

$caballero = $resultado->fetch_assoc();

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>
    <form action="update_caballeros.php">
        <label><b>ID:</b></label>
        <input type="text" name="id" placeholder="id" value="<?=$caballero['id']?>" readonly><br>
        <label><b>Nombre:</b></label>
        <input type="text" name="nombre" placeholder="nombre"  value="<?=$caballero['nombre']?>"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>