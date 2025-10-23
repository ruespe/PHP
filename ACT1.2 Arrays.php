<?php
echo "1. Calcula tres nombres aleatoris i, utilitzant l'operador condicional ?:, mostri per pantalla quins és el nombre major i quin és el nombre menor.";

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

echo "<br>";

echo $a . " " . $b . " " . $c . "<br>";

echo "Numeros generados: $a, $b $c<br>";

$mayor = ($a > $b)
    ? (($a > $c) ? $a : $c)
    : (($b > $c) ? $b : $c);

$menor = ($a < $b)
    ? (($a < $c) ? $a : $c)
    : (($b < $c) ? $b : $c);

echo "El numero mayor es: $mayor<br>";
echo "El numero menor es: $menor<br>";

?>

<?= "<br>" . "<br>" ?>

<?php
echo "Inicialitza un array associatiu que tingui com a clau el nom del país i com a valor el nombre d'habitants. Mostra en el navegador les dades de manera llegible";
echo "<br>";

$paises = [
    "España" => 50000000,
    "UK" => 341353453,
    "Alemania" => 2131312
];
foreach ($paises as $pais => $habitantes) {
    echo "$pais: $habitantes<br>";
}
echo "<br>";
?>

<?php
echo "Inicialitza un array associatiu amb quatre registres de participants en una carrera. Genera els dorsals dels corredors i emmagatzema'ls en l'última casella de l'array. El format del dorsal és: H, D o X en funció del gènere + les tres primeres lletres del nom (la 1a en majúscula) + les tres primeres lletres del primer cognom (la 1a en majúscula). Mostra pel navegador l'array sencer de manera legible.<br><br>";
$participantes = [
    ""
]


?>

<?php
echo "Implementa un script que mostri per pantalla una graella semblant a la següent: GRAELLA DEL 1 AL 100";

echo "<table border=1>";
echo "<style>
td{
padding:4px;
}
</style>";
echo "<tr>";
$cont=1;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j <= 9; $j++ & $cont++) {
        echo "<td>$cont</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<br>";
echo "5.Inicialitza un array amb 10 ciutats, crida a les diferents funcions d'ordenació que ofereix PHP (sort(), rsort(), asort(), arsort(), ksort(), krsort() i shuffle()) explicant com ordena i mostra el resultat pel navegador.";

$ciudades = ["Madrid", "Barcelona","Pamplona","Pekín","Tokio","Londres","Vilna","Mataró","Berlín","Faro"];

echo "<br>";
echo "<br>";

foreach($ciudades as $ciudad){
echo " $ciudad ";
}

//foreach()

rsort($ciudades);
echo "<br>";
print_r($ciudades);
echo "<br>";
echo "<br>";
echo $ciudades;
?>