<?php

//Realiza un programa que calcule la media de tres notas

header('Content-Type: text/html; charset=UTF-8');

$num1=htmlspecialchars(trim(strip_tags($_REQUEST['num1'])), ENT_QUOTES, "ISO-8859-1");
$num2=htmlspecialchars(trim(strip_tags($_REQUEST['num2'])), ENT_QUOTES, "ISO-8859-1");
$num3=htmlspecialchars(trim(strip_tags($_REQUEST['num3'])), ENT_QUOTES, "ISO-8859-1");

$media_notas = (($num1 + $num2 + $num3) / 3);

if(($num1 == "") && ($num2 == "") && ($num3 == ""))
    print "<p>Tienes que introducir los números</p>";
elseif((isset($num1)) && (isset($num2)) && (isset($num3)))
    echo "La media de las notas introducidas es: ".$media_notas;

?>