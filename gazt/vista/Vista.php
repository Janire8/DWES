<?php

namespace Vista;

class Vista
{

    public static function mostraTitulo($titulo)
    {
        echo "<h1>" . $titulo . "</h1>";
    }

    //Función inicio HTML
    public static function inicioHTML()
    {
?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Recursos sobre Agresiones</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php
    }

    //Función final HTML (scripts)
    public static function finalHTML()
    {
        ?>
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
            </body>

            </html>
    <?php
    }
}
