<!-- 2-. Implementa utilitzant cookies una pàgina web que ens mostri la data actual, la data de l'últim accés i el nombre de visites que ha rebut.

A més afegeix dos enllaços, un per actualitzar la pàgina en quant a data, hora i nombre d'accessos) i l'altre per tornar a començar, com si mai s'anés connectat. La pàgina pot tenir el següent aspecte: -->

<<<<<<< HEAD
<?php 
isset($_COOKIE['acceso']()){
    echo "Data y hora actual: " . $fechaActual;
}

?>

<!DOCTYPE html>
<html lang="en">
=======
<?php


$fechaActual = new DateTime();

setcookie("accesoFecha", $fechaActual->format('d-m-Y H:m:s'), time() + 3600);

if(isset($_COOKIE["accesoContador"])){
    $contador = $_COOKIE["contador"] + 1;
    
}

setcookie("accesoContador", $contador, time() + 3600);

if (isset($_POST['actualizar'])) {
    $ultimo_acceso = $_COOKIE["accesoFecha"];
}

if (isset($_POST['borrar'])) {
}
?>


<!DOCTYPE html>
<html lang="en">

>>>>>>> 766edfa396a92e887f5cce7cecf022b19b9030ff
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<<<<<<< HEAD
<body>
    
</body>
</html>
=======

<body>


    <?php
    echo "Data i hora actual: " .  $fechaActual->format('d-m-Y H:m:s');

    echo "<br>";

    echo "L'ultima vegada que vas accedir a aquesta pàgina va ser: " .
    $ultimo_acceso;

    echo "Quantitat d'accesos a aquesta pàgina: " . $contador;
    ?>
</body>

</html>
>>>>>>> 766edfa396a92e887f5cce7cecf022b19b9030ff
