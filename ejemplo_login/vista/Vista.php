<?php

class Vista {

    public static function inithtml() { ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Aplicación MVC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
        <div class="container">
    <?php }

    
    public static function endhtml() {
        echo '</div> <!-- cierre de div container -->';
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
        echo '</body>';
        echo '</html>';
    }

    public static function formLogin() {
        echo '<form action="login.php" method="post" class="mt-4">';
        echo '<div class="mb-3">';
        echo '<label for="username" class="form-label">Nombre de usuario</label>';
        echo '<input type="text" id="username" name="username" class="form-control" required>';
        echo '</div>';
        echo '<div class="mb-3">';
        echo '<label for="password" class="form-label">Contraseña</label>';
        echo '<input type="password" id="password" name="password" class="form-control" required>';
        echo '</div>';
        echo '<button type="submit" class="btn btn-primary">Iniciar sesión</button>';
        echo '</form>';
    }

    public static function desktop(){
        echo '<div>';
        echo '<a href="logout.php" class="btn btn-danger">Cerrar sesión</a>';
        echo '<h1>Bienvenido al sistema, ' . $_SESSION['usuario_logueado'] .'</h1>';
        echo '</div>';
    }
}

  


?>
