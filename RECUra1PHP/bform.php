<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($_POST as $clau => $valor) {
        if (empty($valor)) {
            echo "El campo $clau es obligatorio";
        } else {
            if (is_array($valor)) {
                echo "$clau: " . implode(', ', $valor) . "<br>";
            } else {
                // Limpiamos, filtramos y evitamos XSS en una sola línea
                $net = htmlspecialchars(filter_var(trim($valor), FILTER_SANITIZE_SPECIAL_CHARS));
                echo "$clau: $net<br>";
            }
        }
    }
}
