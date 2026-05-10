<<<<<<< HEAD
<!-- Implementa en un únic fitxer (exercici1) un formulari que demani a l'usuari el seu nom i la seva data de naixement. Utilitza action="<?php echo $_SERVER["PHP_SELF"];?>"
Per introduir la data de naixement, utilitza un menú de selecció generant els nombres de dia, mes i any (des de 1990 fins 2020) mitjançant php.
Fes-lo amb el mètode GET.
Processar el formulari serà calcular l'edat del usuari i mostrar-li d'aquesta manera: " Ets la Laia i tens 25 anys" -->

<?php 

?>
=======
<!-- EXERCICI 1

Implementa en un únic fitxer (exercici1) un formulari que demani a l'usuari el seu nom i la seva data de naixement. Utilitza action="<?php
                                                                                                                                        echo $_SERVER["PHP_SELF"]; ?>"
Per introduir la data de naixement, utilitza un menú de selecció generant els nombres de dia, mes i any (des de 1990 fins 2020) mitjançant php.
Fes-lo amb el mètode GET.
Processar el formulari serà calcular l'edat del usuari i mostrar-li d'aquesta manera: " Ets la Laia i tens 25 anys" -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['nom']) && !empty($_GET['nom'])) {
        $nom = htmlspecialchars($_GET['nom']);
        $dia = (int)$_GET['dia'];
        $mes = (int)$_GET['mes'];
        $any = (int)$_GET['any'];

        $data_naixement = new DateTime("$any-$mes-$dia");
        $data_actual = new DateTime();

        $edat = $data_actual->diff($data_naixement)->y;

        echo "<p>Ets $nom i tens $edat anys</p>";
    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="">Nom:</label>
        <input type="text" name="nom">
        <label for="dia">Dia</label>
        <select name="dia" id="dia">
        <?php
            for($i=1; $i <=31; $i++){
                echo "<option value='$i'>$i</option>";
            }
        ?>
        </select>
        <label for="mes">Mes</label>
        <select name="mes" id="mes">
            <?php
            for($i=1;$i<=12;$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <label for="any">Any</label>
        <select name="any" id="any">
            <?php
            for($i=1990;$i<=2020;$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
>>>>>>> d0497b31f33e0a8ba5dd9a81098831cdd58d89e3
