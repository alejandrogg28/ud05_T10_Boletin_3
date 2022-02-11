<?php
/*
Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras.
Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.
*/

header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "<pre/>";

$horas=htmlspecialchars(trim(strip_tags($_REQUEST['horas'])), ENT_QUOTES, "ISO-8859-1");
$salario_minimo=$horas * 12;
$salario_extra=$_POST['horas_extra'] * 16; 
if($horas = "")
    print "<p>Debe introducir el número de horas</p>";
elseif ($_POST['horas'] >= 41){ 
    print "<p>Estás introduciendo más horas del total de las ordinarias.</p>";
}

if ($_POST['horas'] <= 40) 
    print "<p>El salario es de $salario_minimo euros</p>";

if (isset($_POST['horas_extra'])) 
    print "<p>Las horas extra suponen un extra de $salario_extra euros</p>";

 echo "<p>El salario total es de: ".($salario_minimo + $salario_extra)." euros</p>";

?>