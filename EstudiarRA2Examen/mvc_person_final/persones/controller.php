<?php

require_once 'model.php';
require_once 'view.php';

class controller {

	//rutes o esdeveniments possibles
	//view1: nom i edat
	//view2: nom i alçada
	private $peticions = array('view1', 'view2', 'form_select','view_cerca','form_insert','view_insert','view_inici','form_modificar','view_form_modificar','view_modificar','form_esborrar','view_form_esborrar','view_esborrar');

	public function handler() {

		// Què em demanen?
		$event = 'view_inici';

		$uri = $_SERVER['REQUEST_URI'];
		echo $uri;

		foreach ($this->peticions as $peticio)
			if (strpos($uri, $peticio) == true)
				$event = $peticio;

		$per = new persones(); //model.php

		$view = new view(); // view.php

		switch ($event) {

			case 'view1':
				$dades = $per->selectAll(array("nom", "edat"));
				$view->retornar_vista($event, $dades);
				break;

			case 'view2':
				$dades = $per->selectAll(array("nom", "alcada"));
				$view->retornar_vista($event, $dades);
				break;

			// Start form select
			case 'form_select':
				$view->retornar_vista($event);
				break;

			case 'view_cerca':
				$dades = $per->select(test_input($_POST['nom']));
				$view->retornar_vista($event, $dades);
				break;
			// End form select

			// Start form inserir
			case 'form_insert':
				$view->retornar_vista($event);
				break;

			case 'view_insert':
				$dades = $per->insert(test_input($_POST['nom']),test_input($_POST['edat']), test_input($_POST['alcada']));
				$dades = $per->selectAll(array("id","nom","edat","alcada"));
				$view->retornar_vista($event, $dades);
				break;
			// End form inserir

			////////////////////////////////////////////////////////////////////////////// Start examen
			case 'view_inici':
				$dades = $per->selectAll(array("id","nom","edat","alcada"));
				$view->retornar_vista($event, $dades);
				break;

			// Start form modificar
			case 'form_modificar':
				$view->retornar_vista($event,array(),"Modificar per id");
				break;
			
			case 'view_form_modificar':
				$dades = $per->selectById(test_input($_POST['id']));
				if(empty($dades)){
					$view->retornar_vista("ERROR",array(),"<h1>Error en el formulari!</h1>");
				}
				else{
					$view->retornar_vista($event, $dades);
				}
				break;

			case 'view_modificar':
				$id = test_input($_POST['id']);
				$dades = $per->update($id, test_input($_POST['nom']), test_input($_POST['edat']), test_input($_POST['alcada']));
				$dades = $per->selectById($id);
				$view->retornar_vista($event, $dades,'Registre Actualitzat - Resultat');
				break;
			// End form modificar

			// Start form esborrar
			case 'form_esborrar':
				$view->retornar_vista($event,array(),"Esborrar per id");
				break;
			
			case 'view_form_esborrar':
				$dades = $per->selectById(($_POST['id']));
				if(empty($dades)){
					$view->retornar_vista("ERROR",array(),"<h1>Error en el formulari!</h1>");
				}
				else{
					$view->retornar_vista($event, $dades);
				}
				break;

			case 'view_esborrar':
				$dades = $per->delete(test_input($_POST['id']));
				$dades = $per->selectAll(array("id","nom","edat","alcada"));
				$view->retornar_vista("view_inici", $dades,'Registre esborrat'); // Le muestro la view de inicio para ahorrar codigo
				break;
			// End form esborrar
		}

		
	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}