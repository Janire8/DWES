<?php
$maximo = rand (1,99);
if (isset($_GET["pares"])) {
    for ($i = 0; $i < $maximo; $i++) {
        if ($i % 2 == 0) {
            echo ($i . "<br>");
        }
    }
}else {
    for ($i = 0; $i < $maximo; $i++) {
        if ($i % 2 != 0) {
            echo ($i . "<br>");
        }
    }
}

?>