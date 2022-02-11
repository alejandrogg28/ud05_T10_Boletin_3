<?php

/*
Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
o sobresaliente).
*/

header('Content-Type: text/html; charset=UTF-8');

$num1=htmlspecialchars(trim(strip_tags($_REQUEST['num1'])), ENT_QUOTES, "ISO-8859-1");
$num2=htmlspecialchars(trim(strip_tags($_REQUEST['num2'])), ENT_QUOTES, "ISO-8859-1");
$num3=htmlspecialchars(trim(strip_tags($_REQUEST['num3'])), ENT_QUOTES, "ISO-8859-1");

$media_notas = (($num1 + $num2 + $num3) / 3);

if(($num1 == "") && ($num2 == "") && ($num3 == ""))
    print "<p>Tienes que introducir los números</p>";
elseif((isset($num1)) && (isset($num2)) && (isset($num3)))
    echo "La media de las notas introducidas es: ".$media_notas;

if(($media_notas == 0) || ($media_notas < 5))
    print "<p>LO SIENTO. TIENES UN INSUFICIENTE</p>";
elseif ($media_notas  == 5 ) {
    print "<p>TIENES UN SUFICIENTE</p>";
}
elseif (($media_notas == 6) || ($media_notas < 7)) {
    print "<p>TIENES UN BIEN</p>";
}
elseif (($media_notas == 7) || ($media_notas < 9)) {
    print "<p>TIENES UN NOTABLE</p>";
}
elseif (($media_notas == 9) || ($media_notas < 11)) {
    print "<p>TIENES UN SOBRESALIENTE</p>";
}










?>