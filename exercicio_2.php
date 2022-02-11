<?php
/*
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado
*/

header('Content-Type: text/html; charset=UTF-8');

$hora=htmlspecialchars(trim(strip_tags($_REQUEST['hora'])), ENT_QUOTES, "ISO-8859-1");
//$horas_muertas = array();

if($hora == "")
    print "<p>Tienes que introducir un número.</p>";

if(($_POST['hora'] >= 6) && ($_POST['hora'] <= 12))
    print "<p>Buenos días!!</p>";
elseif (($_POST['hora'] >= 13) && ($_POST['hora'] <= 20)) {
    print "<p>Buenas tardes!!</p>";
}
elseif ($hora > 23) {
    print "<p>Error. Hora incorrecta.</p>";
}
else {
    print "<p>Buenas noches!!</p>";
}

?>