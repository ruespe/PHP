<!-- 1-. Implementa una aplicació web senzilla on la pàgina inicial demanarà el nom al usuari connectat i si es torna a connectar altra vegada, l'aplicació mostrarà un missatge personalitzat de benvinguda.

Hauràs de crear una galeta per guardar el nom dels usuaris que es van connectant.

A cada connexió hauràs de comprovar si existeix la galeta corresponent per saludar o no de manera personalitzada.

A més, afegeix un camp que permeti a l’usuari comunicar que vol esborrar la cookie. En aquest cas s'haurà d’eliminar. -->

<?php 
if(isset($_GET['eliminar'])){
    setcookie('nom', '',time() - 3600);
    unset($_COOKIE['nom']);
} elseif(isset($_GET['nom']) && !empty($_GET['nom'])){
    setcookie('nom', $_GET['nom'], time() + 3600);
    $_COOKIE['nom'] = $_GET['nom'];
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
        <?php if(isset($_COOKIE['nom']))?>
        <h2>Benvingut <?php echo $_COOKIE['nom']; ?></h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
        <input type="text" name="nom">
        <button type="submit">Submit</button>
        <button type="reset">Eliminar cookie</button>
    </form>
</body>

</html>