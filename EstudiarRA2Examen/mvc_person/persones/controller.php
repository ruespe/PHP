<?php

// Importamos modelo y vista una vez, si no se encuentran dará error fatal
require_once 'model.php';
require_once 'view.php';

// Está clase se encarga de que mostrar según la URL
class controller
{

  //rutes o esdeveniments possibles
  //view1: nom i edat
  //view2: nom i alçada

  // Controller tiene una variable que contiene las dos posibles 
  // eventos o vistas que puede solicitar el usuario
  private $peticions = array('view1', 'view2', 'view3');

  // El método principal que procesa la solicitud del usuario 
  // y le muestra la vista correspondiente
  public function handler()
  {

    // Què em demanen?
    $event = 'inici';

    // On som?
    $uri = $_SERVER['REQUEST_URI'];
    $host = $_SERVER['HTTP_HOST'];
    echo $host . $uri;

    // Recorre las vistas, busca en la uri a ver si hay la vista que pide el usuario,
    // si la encuentra la guarda en evento
    foreach ($this->peticions as $peticio) {
      if (strpos($uri, $peticio) !== false) {
        $event = $peticio;
        break;
      }
    }

    // Muestro que evento/vista se está ejecutando
    echo "<br> Evento " . $event;

    $personModel = new persones();

    $viewManager = new view();


    
    switch ($event) {


      case 'view1':
        $dades = $personModel->selectAll(array("nom", "edat"));
        $viewManager->retornar_vista($event, $dades);
        break;

      case 'view2':
        $dades = $personModel->selectAll(array("nom", "alcada"));
        $viewManager->retornar_vista($event, $dades);
        break;

      case 'view3':
        $dades = $personModel->select();
        $viewManager->retornar_vista($event, $dades);
        break;

      case 'inici':
        $viewManager->retornar_vista($event, array());
        
    }
  }
}
