/*1.Implementa en un únic fitxer (exercici1) un formulari que demani a l'usuari el seu nom i la seva data de naixement. Utilitza action="




echo $_SERVER["PHP_SELF"];?>"
2.Per introduir la data de naixement, utilitza un menú de selecció generant els nombres de dia, mes i any (des de 1990 fins 2020) mitjançant php.
3.Fes-lo amb el mètode GET.
4.Processar el formulari serà calcular l'edat del usuari i mostrar-li d'aquesta manera: " Ets la Laia i tens 25 anys"
*/


<!DOCTYPE html>
<html lang="en">


<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>


<body>






   <?php


   if (isset($_GET['nombre'])) {


       $nombre = $_GET['nombre'];
       $dia = $_GET['dia'];
       $mes = $_GET['mes'];
       $anyNaixament = $_GET['año'];


       $anyActual = date("Y");


       $edat = $anyActual - $anyNaixament;


       echo "<span>Ets la $nombre i tens $edat anys</span>";
   }






   ?>


   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
       <input type="text" name="nombre">
       <br>
       <label for="dia">Dia</label>
       <select name="dia" id="dia">
           <?php
           for ($i = 1; $i <= 31; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="Mes">Mes</label>
       <select name="mes" id="mes">
           <?php
           for ($i = 1; $i <= 12; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="Año">Año</label>
       <select name="año" id="año">
           <?php
           for ($i = 1990; $i <= 2020; $i++) {
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
   </form>






   Separa en dos fitxers el formulari (formExer2), del processament del formulari (procExer2)
   Implementa un formulari semblant al de la imatge, per tal de demanar informació sobre un model de cotxe.
   Valida/Sanea les dades recollides costat servidor:
   Tots els camps són obligatòris.
   Utilitza la funció filter_var() per validar el format i eliminar possibles caràcters maliciosos.
   Utilitza la funció htmlspecialchars() per prevenir atacs XSS.
   Utilitza la funció trim() per netejar les dades.
   Procesar el formulari és mostrar clarament les dades recollides, recorrent la variable superglobal corresponent amb foreach.
   Fes-lo amb el mètode POST.


   <h1>Formulari i Resposta</h1>
   <form action="procExer2" method="POST">
       <label for="model">Model:</label>
       <input type="text" name="model">
       <label for="model">Marca:</label>
       <input type="text" name="marca">


       <br>


       <label for="model">Motor:</label>
       <input type="text" name="motor">
       <label for="model">Cilindrada:</label>
       <input type="text" name="cilindrada">


       <br>


       <label for="energia">Energia:</label>
       <input type="radio" name="gasolina">
       <label for="gasolina">Gasolina</label>
       <input type="radio" name="diesel">
       <label for="Diesel">Diesel</label>
       <input type="radio" name="hibrid">
       <label for="Híbrid">Híbrid</label>
       <input type="radio" name="electric">
       <label for="Elèctric">Elèctric</label>


       <br>


       <label for="opcions">Opcions:</label>
       <select name="opcions" size="4">
           <option value="pack sport">pack sport</option>
           <option value="millora">millora</option>
           <option value="mierda">mierda</option>
           <option value="aaa">aaa</option>
       </select>
       <button>Envia</button>
       <button>Inicialitza</button>
   </form>


</body>


</html>


