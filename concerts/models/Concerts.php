<?php
require_once __DIR__ . '/DBAbstractModel.php';

class Concerts extends DBAbstractModel
{

    public function selectAll()
    {
        $this->query = "SELECT * FROM concerts ORDER BY data ASC";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function select($id_concert)
    {
        $this->query = "SELECT * FROM concerts WHERE id_concert = $id_concert";
        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            return $this->rows[0];
        }
        return null;
    }

    public function insert($data)
    {
        $grup = $data['grup'];
        $ciutat = $data['ciutat'];
        $sala = $data['sala'];
        $data_concert = $data['data'];
        $hora = $data['hora'];
        $this->query = "INSERT INTO concerts (grup, ciutat, sala, data, hora) VALUES ('$grup', '$ciutat', '$sala', '$data_concert', '$hora')";
        return $this->execute_single_query();
    }

    public function update($data)
    {
        $id_concert = $data['id_concert'];
        $sala = $data['sala'];
        $this->query = "UPDATE concerts SET sala = '$sala' WHERE id_concert = $id_concert";
        return $this->execute_single_query();
    }

    public function delete($id_concert)
    {
        $this->query = "DELETE FROM concerts WHERE id_concert = $id_concert";
        return $this->execute_single_query();
    }

    public function selectByGrup($grup)
    {
        $this->query = "SELECT * FROM concerts WHERE grup LIKE '%$grup%' ORDER BY data ASC";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function selectByDates($data_inici, $data_fi)
    {
        $this->query = "SELECT * FROM concerts WHERE data BETWEEN '$data_inici' AND '$data_fi' ORDER BY data ASC";
        $this->get_results_from_query();
        return $this->rows;
    }
}
