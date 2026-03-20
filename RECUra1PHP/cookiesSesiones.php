<!-- 1-. Implementa una aplicació web senzilla on la pàgina inicial demanarà el nom al usuari connectat i si es torna a connectar altra vegada, l'aplicació mostrarà un missatge personalitzat de benvinguda.

Hauràs de crear una galeta per guardar el nom dels usuaris que es van connectant.

A cada connexió hauràs de comprovar si existeix la galeta corresponent per saludar o no de manera personalitzada.

A més, afegeix un camp que permeti a l’usuari comunicar que vol esborrar la cookie. En aquest cas s'haurà d’eliminar.
 -->
<?php
if(isset($_POST['borrar'])){
   setcookie("usuario", "", time() - 3600);
   header("Location: " . $_SERVER["PHP_SELF"]);
   exit();
}

if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
   $valor = $_POST['nombre'];
   $valor = trim($valor);
   $valor = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
   $valor = htmlspecialchars($valor);

   setcookie("usuario", $valor, time() + 3600);
   header("Location: " . $_SERVER["PHP_SELF"]);
   exit();
}

$mensaje = "Bienvenido, por favor ingresa tu nombre:";
if(isset($_COOKIE["usuario"])){
   $mensaje = "Bienvenido de nuevo, " . $_COOKIE["usuario"] . "!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
      <input type="text" name="nombre">
      <button type="submit">Submit</button>
      <button name="borrar" type="submit">Eliminar cookie</button>
   </form>
   <?php
   echo $mensaje;
   ?>
</body>

</html>