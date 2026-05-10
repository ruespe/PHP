<!-- 1-. Implementa una aplicació web senzilla on la pàgina inicial demanarà el nom al usuari connectat i si es torna a connectar altra vegada, l'aplicació mostrarà un missatge personalitzat de benvinguda.

Hauràs de crear una galeta per guardar el nom dels usuaris que es van connectant.

A cada connexió hauràs de comprovar si existeix la galeta corresponent per saludar o no de manera personalitzada.

A més, afegeix un camp que permeti a l’usuari comunicar que vol esborrar la cookie. En aquest cas s'haurà d’eliminar.
 -->

<?php 
if(isset($_GET['reset'])){
    setcookie('visites', '', time() - 3600);
    setcookie('ultim_access', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
$actual = date('d/m/Y');
$

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
