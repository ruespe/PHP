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
        Defineix una variable amb el preu d'un article i una constant almb el valor de l'IVA vigent. Calcular i mostrar el preu final de l'article en aplicar l'IVA. Arrodonir als cèntims d'euro.
        -->

        <h3>Ejercicio 1</h3>
        <form action="ACT1.1.php" method="POST">
            <label for="precio">Introduce el precio del articulo:</label>
            <input type="text" name="precio" id="precio">
            <input type="submit" value="Send">
        </form>
        <?php
        const porcentajeIVA = 0.21;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $precio = $_POST["precio"];
            $eurosIVA = $precio * porcentajeIVA;
            $precioFinal = $precio + $eurosIVA;
            echo "El precio con IVA es: " . number_format($precioFinal, 2) . " €";
        }
        ?>
        <!--

Escriu un script que demani al sistema la data i hora i que mostri pel navegador l'estació de l'any, el mes de l'any, el dia de la setmana i que doni  "bon dia", "bona tarda" o "bona nit" segons l'hora.
    -->
        <h3>Ejercicio 2</h3>
        <?php
        $hora = date("H");
        echo date("l jS \of F Y h:i:s A");
        echo "<br>";
        if ($hora < 12) {
            echo "Buenos días";
        } else if ($hora > 12 || $hora < 20) {
            echo "Buenas tardes";
        } else {
            echo "Buenas Noches";
        }
        ?>





    </main>

</body>

</html>