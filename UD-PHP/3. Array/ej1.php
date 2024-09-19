<?php
$nombre1 = "Janire";
$apellido1 = "Cruz";
$dni1 = "12345678A";

$nombre2 = "Jon";
$apellido2 = "Stalton";
$dni2 = "78945612B";

$usuario1 = [$nombre1, $apellido1, $dni1];
$usuario2 = [$nombre2, $apellido2, $dni2];

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