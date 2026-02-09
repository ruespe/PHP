<?php

// Comprovació de sessió


// Comprovació del formulari de login


// Verificar el login


// Login correcte.
// Ha de terminar redirigint a inici.php per assegurar que la cookie es llegeix immediatament
 header('Location: inici.php');


// Login incorrecte. Mostrar missatge d'error

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici de Sessió / Àrea Privada</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .contingut { width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <div class="contingut">
        <?php if /*Comprovació sessió iniciada*/ ?>
            <h1> Benvingut/da, <? ?>!</h1>
            <p>Has iniciat la sessió correctament. Aquesta és la teva àrea privada.</p>

            <p><a href="tanca_sessio.php">Tancar Sessió</a> </p>
            <hr>
            <p><a href="registre.php">Anar al Registre</a></p>
        <?php else: ?> /* Pintar formulari */
            <h1>Inici de Sessió</h1>

            <?php /* Mostrar missatge*/?>
    </div>
</body>
</html>