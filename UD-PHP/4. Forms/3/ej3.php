<?php

$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$btnSuma = $_POST["suma"];
$btnResta = $_POST["resta"];
$btnMultiplicacion = $_POST["multi"];
$btnDivision = $_POST["division"];

if ($btnSuma) {
    if (!empty(($_POST["num1"]) . ($_POST["num2"]))) {
        $suma = $numero1 + $numero2;
        echo ("La suma es : " . $suma);
    } else {
        echo ('<p style="color:red" No se han introducido valores</p><br>');
    }
}

if ($btnResta) {
    if (!empty(($_POST["num1"]) . ($_POST["num2"]))) {
        $resta = $numero1 - $numero2;
        echo ("La resta es : " . $resta);
    } else {
        echo ('<p style="color:red" No se han introducido valores</p><br>');
    }
}

if ($btnMultiplicacion) {
    if (!empty(($_POST["num1"]) . ($_POST["num2"]))) {
        $multiplicacion = $numero1 * $numero2;
        echo ("La resta es : " . $multiplicacion);
    } else {
        echo ('<p style="color:red" No se han introducido valores</p><br>');
    }
}

if ($btnDivision) {
    if (!empty(($_POST["num1"]) . ($_POST["num2"]))) {
        $division = $numero1 / $numero2;
        echo ("La resta es : " . $division);
    } else {
        echo ('<p style="color:red" No se han introducido valores</p><br>');
    }
}
