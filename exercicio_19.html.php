<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 Boletín 3</title>
</head>
<body>
<!--Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se
permiten números de hasta 5 cifras.-->    

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

        $esCapicua=true;
        for ($i=0; $i < strlen($meuNumero); $i++) {
            
            $esquerda=substr($meuNumero,$i,1);
            $dereita=substr($meuNumero,strlen($meuNumero)-1-$i,1);

            if($esquerda != $dereita){
                $esCapicua = false;
            }
        }

    if($esCapicua){
        echo "<p>O número $meuNumero é capicúa</p>";
    }else {
        echo "<p>O número $meuNumero non é capicúa</p>";
    }


    }else {
        echo "<p>Tes que introducir un número.</p>";
    }

?>

</body>
</html>