<?php

// magic constant
require_once(__DIR__ . "/../core/DBAbstractModel.php");

class persones extends DBAbstractModel {

	private $id;
	private $nom;
	private $edat;
	private $alcada;

	public $message;

	function __construct() {
		$this->db_name = "patromvc";
	}

	function __toString() {
		echo "entro string <br>";
		return "(" . $this->id . ", " . $this->name . ", " . $this->edat . ", " .
			$this->alcada . ")";
	}

	function __destruct() {
	}

	//select dels camps passats de tots els registres
	//stored in $rows property
	public function selectAll($fields = array()) {

		$this->query = "SELECT ";
		$firstField = true;
		for ($i = 0; $i < count($fields); $i++) {
			if ($firstField) {
				$this->query .= $fields[$i];
				$firstField = false;
			} else $this->query .= ", " . $fields[$i];
		}
		$this->query .= " FROM persones";
		$this->get_results_from_query();
		return $this->rows;
	}

	public function select($nom = "") {

		$this->query = "SELECT nom, edat, alcada FROM persones WHERE nom = '$nom'";
		$this->get_results_from_query();
		return $this->rows;
	}

	public function selectById($id = "") {
		$this->query = "SELECT * FROM persones WHERE id = '$id'";
		$this->get_results_from_query();
		return $this->rows;
	}

	public function insert($nom="",$edat="",$alcada="") {

		$this->query = "INSERT INTO persones (nom, edat, alcada) VALUES ('$nom', '$edat', '$alcada');";
		$this->execute_single_query($this->query);
	}

	public function update($id="", $nom="",$edat="",$alcada="") {
		$this->query = "UPDATE persones SET nom='$nom', edat= '$edat', alcada = '$alcada' WHERE id='$id'";
		$this->execute_single_query($this->query);
	}

	public function delete($id="") {
		$this->query = "DELETE FROM persones WHERE id='$id'";
		$this->execute_single_query($this->query);
	}
}
