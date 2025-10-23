<?php
/*Implementa amb funcions, un script que simuli una calculadora
El cos principal calcularà un enter aleatori entre 1 i 5.
Segons el número es cridarà a la funció corresponent per realitzar les operacions (1->suma, 2->resta, 3->producte, 4->divisió i 5->arrel quadrada)
Dins de cada funció es calcularan aleatòriament els operands de l'operació.
La funció farà el càlcul corresponent i tornarà el resultat al cos principal. En el cas de la divisió també el residu.
El cos principal mostrarà al navegador tota la informació de l'operació realitzada.
*/
$random = rand(1, 5);
echo "Número aleatorio generado: $random <br>";

function suma()
{
    $num1 = rand(1, 10000);
    $num2 = rand(1, 10000);

    $resul = $num1 + $num2;

    echo "Resultado de la suma: $num1 + $num2 = $resul";
};
function resta()
{
    $num1 = rand(1, 1000);
    $num2 = rand(1, 3000);

    $resul = $num1 - $num2;

    echo "Resultado de la resta: $num1 - $num2 = $resul";
};

function producto()
{
    $num1 = rand(1, 10000);
    $num2 = rand(1, 10000);

    $resul = $num1 * $num2;

    echo "Resultado de la multiplicación: $num1 * $num2 = $resul";
};

function division()
{
    $num1 = rand(1, 10000);
    $num2 = rand(1, 10000);

    $resul1 = $num1 / $num2;
    $resul2 = $num1 % $num2;

    echo "Resultado de la división, cociente: $num1 / $num2 = $resul1<br>";
    echo "Resultado de la división, resto: $num1 % $num2 = $resul2";
};

function raiz()
{
    $num1 = rand(1, 10000);

    $resul = sqrt($num1);

    echo "Resultado de la raiz: $num1 ** 0.5 = $resul";
};

switch ($random) {
    case 1:
        suma();
        break;
    case 2:
        resta();
        break;
    case 3:
        producto();
        break;
    case 4:
        division();
        break;
    case 5:
        raiz();
        break;
};

?>

<?php

/* Modifica el programa del punt 1 de manera que els operands de les operacions es calculin en el cos principal i es passin per paràmetre a les funcions corresponents.*/

$random = rand(1, 5);

$num1 = rand(1, 10000);
$num2 = rand(1, 10000);


echo "<br><br>Número aleatorio generado: $random <br>";

function suma2($num1, $num2)
{

    $resul = $num1 + $num2;

    echo "Resultado de la suma: $num1 + $num2 = $resul";
};
function resta2($num1, $num2)
{

    $resul = $num1 - $num2;

    echo "Resultado de la resta: $num1 - $num2 = $resul";
};

function producto2($num1, $num2)
{

    $resul = $num1 * $num2;

    echo "Resultado de la multiplicación: $num1 * $num2 = $resul";
};

function division2($num1, $num2)
{

    $resul1 = $num1 / $num2;
    $resul2 = $num1 % $num2;

    echo "Resultado de la división, cociente: $num1 / $num2 = $resul1<br>";
    echo "Resultado de la división, resto: $num1 % $num2 = $resul2";
};

function raiz2($num1)
{

    $resul = sqrt($num1);

    echo "Resultado de la raiz: $num1 ** 0.5 = $resul";
};

switch ($random) {
    case 1:
        suma();
        break;
    case 2:
        resta();
        break;
    case 3:
        producto();
        break;
    case 4:
        division();
        break;
    case 5:
        raiz();
        break;
};

?>