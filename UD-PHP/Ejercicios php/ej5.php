<?php 
/*Hacer una página PHP que compruebe si el contenido de una variable es par o impar.*/

$variable1 = 2;
$variable2 = 3;

if($variable1 % 2 == 0) {
    echo ("Variable 1 Es par");
}else{
    echo ("Variable 1 Es inpar");
}elseif($variable2 % 2 == 0) {
    echo ("Variable 2 Es par");
}else{
    echo ("Variable 2 Es inpar");
}
?>