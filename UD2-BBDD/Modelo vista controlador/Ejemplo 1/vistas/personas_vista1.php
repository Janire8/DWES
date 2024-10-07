<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Nombre y edad</title>
</head>

<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
        </tr>
        <?php
        foreach ($datos as $dato) {
            echo "<tr><td>" . $dato['nombre'] . "</td>";
            echo "<td>" . $dato['edad'] . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>