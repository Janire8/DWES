

<?php

require_once __DIR__ . '/Vista.php';

class VUsuario extends Vista {
    // La clase VUsuario hereda de Vista (definida en General.php)
    // No se incluyen métodos adicionales según las instrucciones de seguimiento
    public function tablaUsuarios($usuarios) {
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nombre de usuario</th>';
        echo '<th>Nombre</th>';
        echo '<th>Contraseña</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($usuarios as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario["username"] . '</td>';
            echo '<td>' . $usuario["nombre"] . '</td>';
            echo '<td>' . $usuario["password"] . '</td>';
            echo '<td><a href="usuario.php?username=' . $usuario["username"] . '">Ver</a> | <a href="usuarioEdit.php?username=' . $usuario["username"] . '">Editar</a> | <a href="usuarioDestroy.php?username=' . $usuario["username"] . '">Eliminar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';    
    }

    public function cabecera() {
        echo '<h1>Usuarios</h1>';
        echo '<a href="usuarioCreate.php">Crear usuario</a>';
    }

    public function formUsuario() {
        echo '<form action="usuarioStore.php" method="post">';
        echo '<div>';
        echo '<label for="username">Nombre de usuario</label>';
        echo '<input type="text" id="username" name="username" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="nombre">Nombre</label>';
        echo '<input type="text" id="nombre" name="nombre" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="password">Contraseña</label>';
        echo '<input type="password" id="password" name="password" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        echo '</form>';
    }   

    public function formEditUsuario($usuario) {
        echo '<form action="usuarioUpdate.php" method="post">';
        echo '<div>';
        echo '<label for="nombre">Nombre</label>';
        echo '<input type="text" id="nombre" name="nombre" value="' . $usuario["nombre"] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="username">Username</label>';
        echo '<input type="text" id="username" name="username" value="' . $usuario["username"] . '" readonly>';
        echo '</div>';
        echo '<div>';
        echo '<label for="password">Contraseña</label>';
        echo '<input type="password" id="password" name="password" value="' . $usuario["password"] . '" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        echo '</form>';
    }

    public function verUsuario($usuario) {
        echo '<div>';
        echo '<p>Nombre: ' . $usuario["nombre"] . '</p>';
        echo '<p>Username: ' . $usuario["username"] . '</p>';
        echo '<p>Contraseña: ' . $usuario["password"] . '</p>';
        echo '</div>';
    }
}
?>
