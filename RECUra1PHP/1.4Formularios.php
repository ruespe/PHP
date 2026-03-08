<!-- EXERCICI 1

Implementa en un únic fitxer (exercici1) un formulari que demani a l'usuari el seu nom i la seva data de naixement. Utilitza action="<?php echo $_SERVER["PHP_SELF"]; ?>"
Per introduir la data de naixement, utilitza un menú de selecció generant els nombres de dia, mes i any (des de 1990 fins 2020) mitjançant php.
Fes-lo amb el mètode GET.
Processar el formulari serà calcular l'edat del usuari i mostrar-li d'aquesta manera: " Ets la Laia i tens 25 anys" -->

<?php

if (isset($_GET['nombre'])){
$nombre = $_GET['nombre'];
$dia = $_GET['dia'];+
$mes = $_GET['mes'];
$año = $_GET['año'];

$fechaNacimiento = new DateTime("$año-$mes-$dia");
$fechaActual = new DateTime();

$edad  = $fechaActual->diff($fechaNacimiento)->y;

echo "Eres $nombre" . " y tienes $edad" . " años.";

}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">

    <label for="dia">Dia</label>
    <select name="dia" id="dia">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>

    <label for="mes">Mes</label>
    <select name="mes" id="mes">
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='$i'>$i</option>";
        } ?>
    </select>

    <label for="año">Año</label>
    <select name="año" id="año">
        <?php
        for ($i = 1990; $i <= 2020; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    </select>
    <button type="submit">Enviar</button>
</form>

