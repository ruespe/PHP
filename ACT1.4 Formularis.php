    /*1.Implementa en un únic fitxer (exercici1) un formulari que demani a l'usuari el seu nom i la seva data de naixement. Utilitza action="<?php echo $_SERVER["PHP_SELF"]; ?>"
    2.Per introduir la data de naixement, utilitza un menú de selecció generant els nombres de dia, mes i any (des de 1990 fins 2020) mitjançant php.
    3.Fes-lo amb el mètode GET.
    4.Processar el formulari serà calcular l'edat del usuari i mostrar-li d'aquesta manera: " Ets la Laia i tens 25 anys"
    */

    <?php
    $name = "Juan";
    $isDev = true;
    $age = 45;

    define("PI",3.1415);

    echo "<h1>F</h1>";
    echo $name;
    echo "<br>";
    echo PI;
    echo "<br>";

    var_dump($name);
    var_dump($isDev);
    var_dump($age);

    // Escupe el tipo por pantalla
    echo gettype($name);

    //Funcion que devuelve si es TRUE or FALSE
    is_string($isDev);
    ?>
    <?= "<h1>aaa</h1>"; ?>

    <?= $name; ?>

<?php
    echo "<br>";
for($i=1;$i<=10;$i++){
    for($j=1;$j<=10;$j++){
    $resultado = $i * $j; 
    echo "$i x $j = $resultado";
    echo "<br>";
    }
    echo "<br>";
}


?>