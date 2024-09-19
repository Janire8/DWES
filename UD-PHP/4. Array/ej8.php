<?php
$personas = [
    [
        "nombre" => "Janire",
        "apellido" => "Cruz",
        "DNI" => "12345678A"
    ],
    [
        "nombre" => "Jon",
        "apellido" => "Stanton",
        "DNI" => "87654321B"
    ]
];

echo "
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
        </tr>
   
";

for ($i = 0; $i < count($personas); $i++) {
    echo "<tr>";
    echo "<td>" . $personas[$i]["nombre"] . "</td>";
    echo "<td>" . $personas[$i]["apellido"] . "</td>";
    echo "<td>" . $personas[$i]["DNI"] . "</td>";
    echo "</tr>";
}

echo ("</tr>
<tr>");
?>
