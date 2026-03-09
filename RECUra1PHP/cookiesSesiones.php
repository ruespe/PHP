<!-- 1-. Implementa una aplicació web senzilla on la pàgina inicial demanarà el nom al usuari connectat i si es torna a connectar altra vegada, l'aplicació mostrarà un missatge personalitzat de benvinguda.

Hauràs de crear una galeta per guardar el nom dels usuaris que es van connectant.

A cada connexió hauràs de comprovar si existeix la galeta corresponent per saludar o no de manera personalitzada.

A més, afegeix un camp que permeti a l’usuari comunicar que vol esborrar la cookie. En aquest cas s'haurà d’eliminar.
 -->

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
      <?php
         if(isset($mensaje)){
            echo $mensaje;
         } else{
            echo "Bienvenido de nuevo, ";
         }
      ?>
   </form>
</body>

</html>

<?php
   $cookie_name = "usuario";

   if(isset($_POST['borrar'])){
      setcookie($cookie_name, "",time() - 3600);
      $mensaje = "Cookie borrada, vuelve a poner tu nombre";
   }

   elseif(isset($_POST['nombre'])){
      $nombre = $_POST['nombre'];
      $nombre = trim($nombre);
      $nombre = htmlspecialchars($nombre);
      setcookie($cookie_name,$nombre, time() + 3600);
      $mensaje = "Bienvenido, $nombre";
   }
?>