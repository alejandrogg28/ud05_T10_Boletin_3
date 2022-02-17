<?php
/*
Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche
*/
//header('Content-Type: text/html; charset=UTF-8');


if(isset($_POST['hora']) && isset($_POST['minuto']) && $_POST['hora']!="" && $_POST['minuto']!=""){

    $hora=$_POST['hora'];
    $minuto=$_POST['minuto'];
    
    $segundos = (($hora * 3600) + ($minuto * 60));
    $segundos_medianoche = ((24 * 3600) - $segundos);
    
    
    echo "Quedan $segundos_medianoche segundos hasta la medianoche";
}else{
    echo "<p>Tes que introducir a hora e os minutos</p>";

}
?>