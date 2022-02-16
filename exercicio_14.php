<?php
//Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.

$numero = $_POST['num'];

if(!isset($numero))
    echo "<p>Tienes que introducir el número.</p>";

if(($numero % 2) == 0)
    echo "<p>El número introducido es par</p>";
else{
    echo "<p>El número introducido es impar</p>";
    }

if(($numero % 5) == 0)
    echo "<p>El número introducido es divisible entre 5</p>";
else {
    echo "<p>El número introducido no es divisible entre 5</p>";
    }

?>