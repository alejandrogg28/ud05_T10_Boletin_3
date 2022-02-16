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
      
      


/*
Comparar los 2 primeros numeros introducidos
si num1 mayor que num2
entonces
    almacenas el valor de num1 en variable almacen
    $almacen = num1;

    asignas el valor de $num2 a $num1 ya que el primer número tiene que ser el más pequeño
    y la condición aquí es si num1 es mayor que num2
    $num1 = $num2;

    $almacen tendrá el valor de num2 porque es el número pequeño
    $num2 = $almacen;

Comparar el segundo y tercer número introducido
si num2 es mayor que num3
entonces

hacemos lo mismo que en la otra condición, ya que el segundo número tiene que ser menor al tercero
    $almacen = $num2;
    $num2 = $num3;
    $num3 = $almacen;

Ahora $num3 tiene el valor que se introducirá en $num2 por lo que hay que recrear la primera condición
para así poder ordenarlos
si num1 es mayor que num2
entonces
    $almacen = $num1;
    $num1 = $num2;
    $num2 = $almacen;
*/






















?>