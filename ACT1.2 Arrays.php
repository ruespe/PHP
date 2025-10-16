<?php
echo "1. Calcula tres nombres aleatoris i, utilitzant l'operador condicional ?:, mostri per pantalla quins és el nombre major i quin és el nombre menor.";

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

echo "<br>";

echo $a ." ". $b . " " . $c . "<br>";

echo "Numeros generados: $a, $b $c<br>";

$mayor = ($a > $b)
    ?(($a > $c) ? $a : $c)
    :(($b > $c) ? $b : $c);

$menor = ($a < $b)
    ?(($a < $c) ? $a : $c)
    :(($b < $c) ? $b : $c);

echo "El numero mayor es: $mayor<br>";
echo "El numero menor es: $menor<br>";

?>
