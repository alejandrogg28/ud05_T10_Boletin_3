<?php
/*
Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche
*/
//header('Content-Type: text/html; charset=UTF-8');

$hora=$_POST['hora'];
$minuto=$_POST['minuto'];

if(!isset($hora) || !isset($minuto))
echo "<p>Tes que introducir a hora e os minutos</p>";

else{
$segundos = (($hora * 3600) + ($minuto * 60));
$segundos_medianoche = ((24 * 3600) - $segundos);


echo "Quedan $segundos_medianoche segundos hasta la medianoche";
}
?>