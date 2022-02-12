<?php
/*
Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica
la fórmula t = √2hg siendo g = 9:81m/s2
*/

header('Content-Type: text/html; charset=UTF-8');

$h=htmlspecialchars(trim(strip_tags($_POST['h'])), ENT_QUOTES, "ISO-8859-1");

//$h=$_POST['h'];
if($h == "")
    print "Tiene que introducir la altura para calcular el tiempo.";

$g = 9.81;

$caida_objeto = sqrt(2 * $h / $g) ;

if(isset($h))
    print "<p>El resultado es: </p>".$caida_objeto;






?>