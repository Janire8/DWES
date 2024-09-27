<?php
if (isset($_GET['id']) && isset($_GET['nombre'])) {
    $id= $_GET['id'];
    $nombre = $_GET['nombre'];

    $mysqli = new mysqli("localhost", "root", "", "test");
  
    
    /* Sentencia preparada, etapa 1: preparación */
    $sentencia = $mysqli->prepare("UPDATE test SET nombre=? WHERE id=?");
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    $sentencia->bind_param("si", $nombre, $id);
    
    $sentencia->execute();
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
//     $resultado = $mysqli->query("SELECT * FROM test");
//     var_dump($resultado->fetch_all());
    header("Location: select_test.php");
}else{
    echo("<br>Error en parametros<br>");
    
}



?>
