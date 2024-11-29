<?php
require_once __DIR__ . '/../vista/Vista.php';

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: loginForm.php");
}

Vista::inithtml();
Vista::desktop();
Vista::endhtml();
