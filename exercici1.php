<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari - Exercici 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007cba;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #005a8b;
        }
        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #e8f5e8;
            border: 1px solid #4caf50;
            border-radius: 4px;
        }
        .result h2 {
            color: #2e7d32;
            margin-top: 0;
        }
        .info {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulari de Dades Personals</h1>
        
        <?php
        // Processar el formulari quan s'ha enviat
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
            $data_naixement = isset($_POST['data_naixement']) ? $_POST['data_naixement'] : '';
            
            // Validar que els camps no estiguin buits
            if (!empty($nom) && !empty($data_naixement)) {
                // Calcular l'edat
                $data_avui = new DateTime();
                $data_naix = new DateTime($data_naixement);
                $edat = $data_avui->diff($data_naix)->y;
                
                // Mostrar els resultats
                echo '<div class="result">';
                echo '<h2>Informació Rebuda:</h2>';
                echo '<div class="info">';
                echo '<strong>Nom:</strong> ' . htmlspecialchars($nom) . '<br>';
                echo '<strong>Data de Naixement:</strong> ' . htmlspecialchars($data_naixement) . '<br>';
                echo '<strong>Edat:</strong> ' . $edat . ' anys<br>';
                echo '</div>';
                echo '</div>';
            } else {
                echo '<div style="background-color: #ffe6e6; border: 1px solid #ff4444; padding: 15px; border-radius: 4px; margin-bottom: 20px;">';
                echo '<strong>Error:</strong> Tots els camps són obligatoris.';
                echo '</div>';
            }
        }
        ?>
        
        <!-- Formulari -->
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="nom">Nom complet:</label>
                <input type="text" id="nom" name="nom" required 
                       value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>"
                       placeholder="Introdueix el teu nom complet">
            </div>
            
            <div class="form-group">
                <label for="data_naixement">Data de Naixement:</label>
                <input type="date" id="data_naixement" name="data_naixement" required
                       value="<?php echo isset($_POST['data_naixement']) ? htmlspecialchars($_POST['data_naixement']) : ''; ?>">
            </div>
            
            <input type="submit" value="Enviar Dades">
        </form>
    </div>
</body>
</html>