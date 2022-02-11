<?php
/*Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).*/

header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "<pre/>";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$x = $num1 / $num2 ;

echo "<p>El resultado de la ecuación es: ".$x."</p>";

?>