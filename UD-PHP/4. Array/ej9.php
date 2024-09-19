<?php
/*Crear un array asociativo con los nombres de meses como índice y los números de los días valor.
A continuación mostrar en pantalla.*/
$meses = [
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
];

echo "
    <table 
        <tr>
            <th>Mes</th>
            <th>Días</th>
        </tr>
    ";

foreach ($meses as $mes => $dias) {
    echo "<tr><td>$mes</td><td>$dias</td></tr>";
}

echo "</table>";
?>


