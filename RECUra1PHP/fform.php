<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulari i resposta</h1>
    <form action="bform.php" method="POST">
        <label for="model">model</label>
        <input type="text" name="model">
        <label for="marca">marca</label>
        <input type="text" name="marca">
        <label for="motor">motor</label>
        <input type="text" name="motor">
        <label for="cilindrada">cilindrada</label>
        <input type="text" name="cilindrada">
        <label for="energia">energia</label>
        <br>
        <input type="radio" value="energia" name="energia" checked>Gasolina
        <input type="radio" value="diesel" name="energia">diesel
        <input type="radio" value="hibrid" name="energia">hibrid
        <input type="radio" value="electric" name="energia">electric
        <br>
        <label for="opcions">opcions</label>
        <select name="opcions[]" id="opcions" multiple size="4">
        <option value="Pack Sport">Pack Sport</option>
        <option value="Millora seguretat">Millora seguretat</option>
        <option value="Climatitzador">Climatitzador</option>
        <option value="Ordinador a bord">Ordinador a bord</option>
        </select>
        <button type="submit">Envia</button>
        <button type="reset">Inicializa</button>
    </form>
</body>

</html>