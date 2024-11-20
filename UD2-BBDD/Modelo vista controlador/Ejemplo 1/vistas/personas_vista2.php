<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Nombre y estatura</title>
</head>

<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Estatura</td>
        </tr>
        <?php
        foreach ($datos as $dato) {
            echo "<tr><td>" . $dato['nombre'] . "</td>";
            echo "<td>" . $dato['estatura'] . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>