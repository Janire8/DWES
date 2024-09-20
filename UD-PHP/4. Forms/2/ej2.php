<?php


echo("<br>");
echo ("El nombre es: " . $_POST["nombre"]); 
echo("<br>");
echo ("El apellido es: " . $_POST["apellido"]); 
echo("<br>");
echo ("La edad es: " . $_POST["edad"]);
echo("<br>");
echo ("Su peso es: " . $_POST["peso"]); 

echo("<br>");
echo("<br>");
if (isset($_POST["sexo"])) {
    echo("Es " . $_POST["sexo"]);
}else{
    echo("El valor no se ha seleccionado");
}

?>