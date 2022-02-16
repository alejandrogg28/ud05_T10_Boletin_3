<?php

//Escribe un programa que ordene tres números enteros introducidos por teclado.

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];

if(isset($num1) && isset($num2) && isset($num3))
    echo "<p>Tienes que introducir los números.</p>";



// ordenación de los dos primeros números
if ($num1 > $num2) {
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}

// ordenación de los dos últimos números
if ($num2 > $num3) {
    $aux = $num2;
    $num2 = $num3;
    $num3 = $aux;
}

// se vuelven a ordenar los dos primeros
if ($num1 > $num2) {
    $aux = $num1;
    $num1 = $num2;
    $num2 = $aux;
}

      echo "Los números introducidos ordenados de menor a mayor son $num1, $num2 y $num3.";    
?>