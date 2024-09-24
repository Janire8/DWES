<?php

$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$btnSuma = $_POST["suma"];
$btnResta = $_POST["resta"];
$btnMultiplicacion = $_POST["multiplicacion"];

if($btnSuma) {
    if(!empty(($_POST["num1"]) . ($_POST["num2"]))) {
    $suma = $numero1 + $numero2;
    echo ("La suma es : " . $suma); 
}else {
    echo ('<p style="color:red" No se han introducido valores</p><br>');
}
}


if($btnResta) {
    if(!empty(($_POST["num1"]) . ($_POST["num2"]))) {
    $resta = $numero1 - $numero2;
    echo ("La resta es : " . $resta); 
}else {
    echo ('<p style="color:red" No se han introducido valores</p><br>');
}
}



?>