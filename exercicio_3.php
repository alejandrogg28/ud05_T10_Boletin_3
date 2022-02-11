<?php
/*
Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana.
*/

header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "<pre/>";

$introduce_numero=htmlspecialchars(trim(strip_tags($_REQUEST['num'])), ENT_QUOTES, "ISO-8859-1");


if($introduce_numero == "")
    print "<p>Tienes que introducir un número.</p>";    
elseif($_POST['num'] == 1){
    print "<p>El día de la semana introducido es Lunes</p>";
}
elseif ($_POST['num'] == 2) {
    print "<p>El día de la semana introducido es Martes</p>";
}
elseif ($_POST['num'] == 3) {
    print "<p>El día de la semana introducido es Miércoles</p>";
}
elseif ($_POST['num'] == 4) {
    print "<p>El día de la semana introducido es Jueves</p>";
}
elseif ($_POST['num'] == 5) {
    print "<p>El día de la semana introducido es Viernes</p>";
}
elseif ($_POST['num'] == 6) {
    print "<p>El día de la semana introducido es Sábado</p>";
}
elseif ($_POST['num'] == 7) {
    print "<p>El día de la semana introducido es Domingo</p>";
}
else {
    print "<p>El día introducido no es correcto</p>";
}
/*
$idade=htmlspecialchars(trim(strip_tags($_REQUEST['idade'])), ENT_QUOTES, "ISO-8859-1");
if ($idade == "")
    print "<p>O campo idade está baleiro.</p>";
elseif (($_POST['idade']<0) || ($_POST['idade']>130)) {
    print "<p>Hai que incluir un número entre 0 e 130</p>";
}
else
    print "<p>O valor recibido do campo idade é: $idade</p>";
*/

?>

