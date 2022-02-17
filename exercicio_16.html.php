<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16, 17 y 18 Boletín 3</title>
</head>
<body>
<!--Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.
    Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado.
    Se permiten números de hasta 5 cifras.
    Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
    negativo. Se permiten números de hasta 5 dígitos.
-->

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Introduce un número:</label> 
        <input type="number" name="numero"/>
        <br>
        <input type="submit" name="Enviar"/>
    </form>

<?php
    if (!isset($_POST['numero'])) {
        echo "<p>Tes que introducir un número.</p>";
    }elseif (filter_var($_POST['numero'],FILTER_VALIDATE_INT)) {
        $meuNumero = $_POST['numero'];

        $meuNumero = abs($meuNumero);

        $primeiroDixito = substr($meuNumero,0,1);
        echo "<p>O primeiro díxito do número é: $primeiroDixito</p>";
        $ultimoDixito = substr($meuNumero,strlen($meuNumero)-1,1);
        echo "<p>O último díxito do número é: $ultimoDixito</p>";

        $numeroDixitos = strlen($meuNumero);
        echo "<p>A cantidade de dísitos é é: $numeroDixitos</p>";
    }else {
        echo "<p>Tes que introducir un número.</p>";
    }

?>
</body>
</html>