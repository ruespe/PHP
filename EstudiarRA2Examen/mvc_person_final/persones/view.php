<?php

class view {
  
  private $diccionari = array (
    'subtitle' => array ('inici' => 'Buscar persona',
                         'view1' => 'Mostrar dades nom i edat',
						 'view2' => 'Mostrar dades nom i alcada',
						 'form_select' => 'Buscar nom',
						 'view_cerca' => 'Mostra tot per nom',
						 'form_insert' => 'Inserir dades',
						 'view_insert' => 'Tots el registres',
						 'view_inici' => 'Tots el registres',
						 'form_modificar' => 'Modificar per id',
						 'view_form_modificar' => 'Modifica els registres',
						 'view_modificar' => 'Registre Actualitzat',
						 'form_esborrar' => 'Esborrar per id',
						 'view_form_esborrar' => 'Comprovacio'),
    'capçalera' => array ('view1' => array('nom','edat'),
						 'view2' => array('nom','alcada'),
						 'view_cerca' => array('nom','edat', 'alcada'),
						 'view_insert' => array('id','nom','edat','alcada'),
						 'view_inici' => array('id','nom','edat','alcada'),
						 'view_modificar' => array('id','nom','edat','alcada')),
	'form' => array ('form_select' => array('nom'),
					 'form_insert' => array('nom', 'edat', 'alcada'),
					 'form_modificar' => array('id'),
					 'form_esborrar' => array('id'),
					 'view_form_modificar' => array('id', 'nom', 'edat', 'alcada'),
					 'view_form_esborrar' => array('id', 'nom', 'edat', 'alcada')));
  

public function retornar_vista ($vista, $dades=array(), $message="Dades de l'usuari") {
	
	if($vista == "ERROR"){
		$html = file_get_contents(__DIR__ . '/../site_media/html/persones_template.html');
		$view = file_get_contents(__DIR__ . '/../site_media/html/error_template.html');
		$html = str_replace('{subtitle}', "ERROR", $html);
		$html = str_replace('{message}', $message, $html);
		$html = str_replace('{main}', $view, $html);
	}

	else{
		// the main template is read (menu, message and the main body (a form or select result)
        // read entire file into a string
		$html = file_get_contents(__DIR__ . '/../site_media/html/persones_template.html');

		// subtitle of the page is writen 
		$html = str_replace('{subtitle}', $this->diccionari['subtitle'][$vista], $html);

		// message passed by controller is writen 
		$html = str_replace('{message}', $message, $html);

		// the HTML table with the select result is built 
		if ($vista=='view1' || $vista=='view2' || $vista=='view_cerca' || $vista=='view_insert' || $vista=='view_inici' || $vista=='view_modificar') {

			// the view template is read and its contents is included in the main template
			$view = file_get_contents(__DIR__ . '/../site_media/html/view_template.html');
			$html = str_replace ('{main}', $view, $html);

			// the table header is built and writen on the template
			$capçalera = $this->buildHeader ($vista);
			$html = str_replace('{capçalera}', $capçalera,$html);

			// the table contents is built and writen on the template
			$contingut = $this->buildContents ($dades);
			$html = str_replace('{contingut}', $contingut, $html);
		}

		if ($vista=='form_select'){

			$view = file_get_contents(__DIR__ . '/../site_media/html/form_template.html');
			$html = str_replace ('{main}', $view, $html);

			$html = str_replace('{url}', 'view_cerca', $html);

			$contingut = $this->buildForm ($vista);
			$html = str_replace('{contingut}', $contingut, $html);
		}

		if ($vista=='form_insert'){

			$view = file_get_contents(__DIR__ . '/../site_media/html/form_template.html');
			$html = str_replace ('{main}', $view, $html);

			$html = str_replace('{url}', 'view_insert', $html);

			$contingut = $this->buildForm ($vista);
			$html = str_replace('{contingut}', $contingut, $html);
		}

		EXAMEN

		// De esta manera se ahorra codigo porque las unicas diferencias a la hora de crear los formularios son el atributo "action"
		// y el array de $dades (que cuando no se usa se inicializa en un array vacio en buildForm() para evitar problemas)
		if($vista=='form_modificar' || $vista=='view_form_modificar' || $vista=='form_esborrar' || $vista=='view_form_esborrar'){

			// Dependiendo de la vista actual el action redirigirá a una vista u otra
			$action = "";
			// Modificar
			if($vista=='form_modificar') $action = "view_form_modificar"; // Del input para buscar por id al form para modificar los datos
			if($vista=='view_form_modificar') $action = "view_modificar"; // Del form para modificar datos a la vista de los datos modificados
			// Esborrar
			if($vista=='form_esborrar') $action = "view_form_esborrar"; // Del input para seleccionar por id el registro a eliminar a la vista de confirmacion
			if($vista=='view_form_esborrar') $action = "view_esborrar"; // De la vista de confirmacion a la vista de los registros completos (donde no estará el eliminado)

			$view = file_get_contents(__DIR__ . '/../site_media/html/form_template.html');
			$html = str_replace ('{main}', $view, $html);
			$html = str_replace('{url}', $action, $html); // Action variable según en qué vista está el programa actualmente 
			$contingut = $this->buildForm ($vista, $dades); // $dades contiene los datos de los SELECT o está vacío si es la vista para buscar por id (tanto modificar como esborarr)
			$html = str_replace('{contingut}', $contingut, $html);
		}

	}

	print $html;

} 


private function buildHeader ($vista) {
	$str = "";
	foreach ($this->diccionari['capçalera'][$vista] as $value) 
		$str .= "<th>" . $value . "</th>";
	return $str;
} 


private function buildContents ($dades) {
	$str = "";
	for ($i=0; $i<count($dades); $i++) {
		$str .= "<tr>";
		foreach ($dades[$i] as $value) 
			$str .= "<td>$value</td>";
		$str .= "</tr>";
	}
	return $str;
}

// Se gestiona según la vista actual que pide el form
private function buildForm ($vista, $dades = array()) {
	$str = "";
	if(!empty($dades)){
		$count = count($dades[0]);
	}
	foreach ($this->diccionari['form'][$vista] as $value) {
	
		// En esta vista se deben poder modificar todos los registros menos el id
		if($vista == 'view_form_modificar'){
			// Se crea el input para obtener luego el id y poder hacer update pero se evita que se pueda modificar
			if ($value == 'id'){
				$str .= "<div> $value </div>";
				$str .= "<div><input type='text' name='$value' id='$value' value='".$dades[0][$value]."' readonly></div>";
			}
			else{
				$str .= "<div> $value </div>";
				$str .= "<div><input type='text' name='$value' id='$value' value='".$dades[0][$value]."' required></div>";
			}
		}

		// En esta vista no se puede modificar ningún registro. No haría falta usar la plantilla del formulario pero así ahorramos codigo
		else if($vista == 'view_form_esborrar'){
			$str .= "<p><strong> $value: </strong><input type='text' name='$value' id='$value' value='".$dades[0][$value]."' readonly></p>";
			
			$count--;
			if ($count==0){ // Si el contador llega a cero no quedan más registros por lo que mostramos el mensaje de confirmacion
				$str .= "<p><strong>Si estás segur@ presiona el botón SUBMIT para eliminar el registro.<br>En caso contrario utiliza el navbar para volver a inicio :D</strong></p>";
			}
		}

		// Si no es ninguna vista anterior mostramos el form tal cual
		else{
			$str .= "<div> $value </div>";
			$str .= "<div><input type='text' name='$value' id='$value' required></div>";	
		}
		
	}
	return $str;
}

}
?>