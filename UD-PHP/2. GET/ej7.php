<?php 
$num1 = $_GET['primerNum'];
$num2 = $_GET['segundoNum'];


for ($i=1; $i <= $num2; $i++) { 
    $num1 = $num1 + $i;
}
echo($num1);
?>