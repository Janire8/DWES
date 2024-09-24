<?php


echo("<br>");
if(!empty($_POST["nombre"])) {
    echo ("El nombre es: " . $_POST["nombre"]); 
}else {
    echo ('<p style="color:red" No ha escrito nombre</p><br>');
}

echo("<br>");

echo("<br>");
if(!empty($_POST["apellido"])) {
    echo ("El apellido es: " . $_POST["apellido"]); 
}else {
    echo ('<p style="color:red" No ha escrito apellido</p><br>');
}

echo("<br>");

if(!empty($_POST["peso"])) {
    echo ("Su peso es: " . $_POST["peso"]); 
}else {
    echo ('<p style="color:red" No ha escrito peso</p><br>');
}

echo("<br>");

if (isset($_POST["sexo"])) {
    echo("Es " . $_POST["sexo"]);
}else{
    echo ('<p style="color:red" No ha seleccionado valor</p><br>');
}

echo("<br>");

if (isset($_POST["estado"])) {
    echo("Es " . $_POST["estado"]);
}else{
    echo ('<p style="color:red" No ha seleccionado valor</p><br>');
}

echo("<br>");

if (isset($_POST["aficiones"])) {
    echo("Tus aficiones son: " );
    foreach($_POST["aficiones"] as $aficiones){
        echo("$aficiones, ");
    }
}else{
    echo ('<p style="color:red" No ha seleccionado valor</p><br>');
}


?>