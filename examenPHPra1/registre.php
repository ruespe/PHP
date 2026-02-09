<?php


// Comprovació si el formulari s'ha enviat


// Validació de camps buits i registre d'usuari

// Missatge d'èxit o error
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Registre de Nou Usuari</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .contingut {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="contingut">
        <h1>Registre d'Usuaris</h1>

        <?php /*Mostrar missatge*/ ?>

        <form method="POST" action="<?php echo
                                    htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <?php

            ?>

            <label for="usuari">Nom d'Usuari:</label><br>
            <input type="text" id="usuari" name="usuari"><br><br>

            <label for="contrasenya">Contrasenya:</label><br>
            <input type="password" id="contrasenya" name="contrasenya"><br><br>

            <button type="submit">Registrar</button>
        </form>

        <p>Ja tens un compte? <a href="inici.php">Inicia sessió</a></p>

        <?php
        $campsObligatoris = ['usuari', 'contrasenya'];
        $errors = [];

        foreach ($campsObligatoris as $camp) {
            if (empty($_POST[$camp])) {
                $errors[] = "El camp '$camp' és obligatori.";
            }
        }

        if (!empty($errors)) {
            echo "<div class='error'>";
            echo "<p><strong>Errors de validació:</strong></p>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
            echo "</div>";
        }


        $dadesNetes = [];

        foreach ($_POST as $clau => $valor) {
            $valor = trim($valor);
            $valor = htmlspecialchars(
                $valor,
                ENT_QUOTES,
                'UTF-8'
            );


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['guardar_nom'])) {
                    $nom = htmlspecialchars(trim($_POST['nom']));
                    setcookie(
                        "usuari",
                        $nom,
                        time(60),
                        "/"
                    );
                }
            }
            //fopen("/fitxers/usuaris.txt","a")


            // Validar
            if ($clau == 'usuari') {
                $valor = filter_var(
                    $valor,
                    FILTER_VALIDATE_INT
                );
            }


            $dadesNetes[$clau] = $valor;
        }

        if (!empty($errors)) {
            echo "<div class='error'>";
            echo "<p><strong>Errors de
validació:</strong></p>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>