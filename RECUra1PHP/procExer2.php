<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($_POST as $clave => $valor) {

        if (empty($valor)) {
            echo "El campo $clave es obligatorio";
        } else {
            $valor = trim($valor);
            $valor = filter_var( $valor, FILTER_SANITIZE_SPECIAL_CHARS);
            $valor = htmlspecialchars($valor);
            echo $clave . ": " . $valor;
            echo "<br>";
        }
    }
}
