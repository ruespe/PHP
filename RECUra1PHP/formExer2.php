<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario y Respuesta</h1>
    <form action="procExer2.php" method="POST">
        <label for="model">Model:</label>
        <input type="text" name="model">
        <label for="marca">Marca:</label>
        <input type="text" name="marca">
        <br>
        <br>
        <label for="motor">Motor:</label>
        <input type="text" name="motor">
        <label for="cilindrada">Cilindrada:</label>
        <input type="text" name="cilindrada">
        <br>
        <label>Energia:</label>
        <input type="radio" name="energia" value="gasolina" checked> Gasolina
        <input type="radio" name="energia" value="diesel"> Diesel
        <input type="radio" name="energia" value="hibrid"> Híbrid
        <input type="radio" name="energia" value="electric"> Elèctric
        <br>
        <label>Opcions:</label>
        <select name="opcions" size="4" multiple>
            <option value="sport">Pack Sport</option>
            <option value="seguretat">Millora seguretat</option>
            <option value="climatitzador">Climatitzador</option>
            <option value="ordinador">Ordinador a bord</option>
        </select>
        <br>
        <br>
        <button type="submit">Envia</button>
        <button type="reset">Inicializa</button>
    </form>
</body>

</html>