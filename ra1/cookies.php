1-. Implementa una aplicació web senzilla on la pàgina inicial demanarà el nom al usuari connectat i si es torna a connectar altra vegada, l'aplicació mostrarà un missatge personalitzat de benvinguda.

Hauràs de crear una galeta per guardar el nom dels usuaris que es van connectant.

A cada connexió hauràs de comprovar si existeix la galeta corresponent per saludar o no de manera personalitzada.

A més, afegeix un camp que permeti a l’usuari comunicar que vol esborrar la cookie. En aquest cas s'haurà d’eliminar.

<?php

if (isset($_POST['borrar'])) {
    setcookie("usuario", "", time() - 3600);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

if (isset($_POST['nombre']) && $_POST['nombre'] !== "") {
    $nombre = trim($_POST['nombre']);
    setcookie("usuario", $nombre, time() + 3600);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cookies</h1>
    <?php
    if (isset($_COOKIE['usuario'])){
        echo "<p>Bienvenido {$_COOKIE['usuario']}</p>";
    }else {
        echo "<p>Introduce tu puto nombre!</p>";
    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="nombre">
        <button type="submit" name="borrar" id="cookie">Eliminar coockie</button>
        <button type="submit">Submit</button>


    </form>


</body>

</html>

2-. Implementa utilitzant cookies una pàgina web que ens mostri la data actual, la data de l'últim accés i el nombre de visites que ha rebut.

A més afegeix dos enllaços, un per actualitzar la pàgina en quant a data, hora i nombre d'accessos i l'altre per tornar a començar, com si mai s'anés connectat. La pàgina pot tenir el següent aspecte:

<?php
if(isset($_POST['reset'])){
    setcookie("visitas", "", time() - 3600, "/");
    setcookie("ultima_visita", "", time() - 3600, "/");
    header("Location: cookies.php");
    exit;
}

$fecha_actual = date("d/m/Y H:i:s");

if(isset($COOKIE["visitas"])){
    $visitas = $_COOKIE["visitas"] + 1;
} else{
    $visitas = 1;
}

if(isset($_COOKIE['ultima_visita'])){
    $ultima_visita = $_COOKIE['ultimo_acceso'];
}else{
    $ultimo_acceso = "Es tu primera visita";
}

setcookie("visitas", $visitas, time() + 3600, "/");
setcookie("ultimo_acceso", $fecha_actual, time() + 3600, "/");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Fecha y hora actual<?=  $fecha_actual?></h2>
<p>Último accesso: <?=  $ultima_visita ?></p>
<p>Cantidad de accesos: <?=  $visitas ?></p>

<hr>

<a href="cookies.php">Actualizar</a>
<a href="cookies.php">Eliminar</a>

</body>
</html>