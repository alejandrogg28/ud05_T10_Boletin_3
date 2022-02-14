<?php
//Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0).

header('Content-Type: text/html; charset=UTF-8');

//$a=htmlspecialchars(trim(strip_tags($_REQUEST['a'])), ENT_QUOTES, "ISO-8859-1");
//$b=htmlspecialchars(trim(strip_tags($_REQUEST['b'])), ENT_QUOTES, "ISO-8859-1");
//$c=htmlspecialchars(trim(strip_tags($_REQUEST['c'])), ENT_QUOTES, "ISO-8859-1");

$a = (isset($_POST['a']));
$b = (isset($_POST['b']));
$c = (isset($_POST['c']));

$neg = -1;

$menosb = $b * $neg;
$oper1 = pow($b, 2);
$oper2 = 4 * $a * $c;
$resta = $oper1 - $oper2;
$raiz =  sqrt ( $resta);
$dos_a = 2 * $a;

$resultado1 = (($menosb + $raiz) / $dos_a);
$resultado2 = (($menosb - $raiz) / $dos_a);

echo "el valor de x1 es: ".$resultado1." <br />";
echo "el valor de x2 es: ".$resultado2." <br />";
?>


