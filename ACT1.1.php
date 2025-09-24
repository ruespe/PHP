<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT1.1</title>
</head>

<body>

    <main>
        <!--
        1.Defineix una variable amb el preu d'un article i una constant almb el valor de l'IVA vigent. Calcular i mostrar el preu final de l'article en aplicar l'IVA. Arrodonir als cèntims d'euro.
        -->

        <h3>Ejercicio 1</h3>
        <form action="ACT1.1.php" method="POST">
            <label for="precio">Introduce el precio del articulo:</label>
            <input type="text" name="precio" id="precio">
            <input type="submit" value="Send">
        </form>
        <?php
        define("porcentajeIVA", 0.21);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $precio = $_POST["precio"];
            $eurosIVA = $precio * porcentajeIVA;
            $precioFinal = $precio + $eurosIVA;
            echo "El precio con IVA es: " . number_format($precioFinal, 2) . " €";
        }
        ?>
        <!--
2.Escriu un script que demani al sistema la data i hora i que mostri pel navegador l'estació de l'any, el mes de l'any, el dia de la setmana i que doni  "bon dia", "bona tarda" o "bona nit" segons l'hora.
    -->
        <h3>Ejercicio 2</h3>
        <?php
        echo date("l jS \of F Y H:i:s A");
        echo "<br>";
        $hora = date("H");
        echo $hora;
        if ($hora >= 6 && $hora < 12) {
            echo "Buenos días";
        } else if ($hora >= 12 && $hora < 20) {
            echo "Buenas tardes";
        } else {
            echo "Buenas noches";
        }
        echo $hora;

        ?>
        <!--
3.Mostra una contrasenya aleatòria de 8 caràcters de longitud. Els caràcters vàlids són "abcdefghijklmnopqrstuvwxyz0123456789 # $% & @". 
    -->
        <h3>Ejercicio 3</h3>

<?php
$caracteres = "abcdefghijklmnopqrstuvwxyz0123456789#$%&@";
$contraseña;

for($i=8;i>0;$i--){
    $contraseña = rand($caracteres,1);
}
echo $contraseña;
?>
        <!--
4.Escriu un script que generi un enter de 8 dígits, calculi la lletra que li correspon de DNI i mostri pel navegador el resultat de manera llegible.
    -->

            <!--
5.Implementa un script per a generar els dorsals dels corredors d'una cursa. El format del dorsal és: H, D o X en funció del gènere + les tres primeres lletres del nom (la 1a en majúscula) + les tres primeres lletres del primer cognom (la 1a en majúscula). Inicialitza variables amb els valors que vulguis i mostra pel navegador de el dorsal resultant.
    -->




    </main>

</body>

</html>
