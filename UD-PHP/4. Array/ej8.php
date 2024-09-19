<?php 

    $usuarios = array(

        $usuario1 = array("Nombre" => "joseba", 
        "Apellido" => "garcia", 
        "DNI"=>"12345678A"),

        $usuario2 = array("Nombre" => "ana", 
        "Apellido" => "lopez", 
        "DNI"=>"12345678B")
    );

    echo (
        "<table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
            </tr>
            <tr>"
    );
    for ($i = 0; $i < count($usuario1); $i++) {
        echo ("<td>" . $usuario1[$i] . "</td>");
    };
    
    echo ("</tr>
    <tr>");
    for ($i = 0; $i < count($usuario2); $i++) {
        echo ("<td>" . $usuario2[$i] . "</td>");
    };
    
    echo ("</tr>
    <tr>");
        
    
?>