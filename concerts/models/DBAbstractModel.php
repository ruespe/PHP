<?php
abstract class DBAbstractModel
{

    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    protected $db_name = "concerts_db";
    protected $query;
    protected $rows = array();
    private $conn;

    abstract protected function selectAll();
    abstract protected function select($param);
    abstract protected function insert($data);
    abstract protected function update($data);
    abstract protected function delete($param);

    private function open_connection()
    {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
        if ($this->conn->connect_error) {
            die("Error de connexio: " . $this->conn->connect_error);
        }
        $this->conn->set_charset("utf8");
    }

    private function close_connection()
    {
        $this->conn->close();
    }

    protected function execute_single_query()
    {
        $this->open_connection();
        $result = $this->conn->query($this->query);
        $this->close_connection();
        return $result;
    }

    protected function get_results_from_query()
    {
        $this->rows = array();
        $this->open_connection();
        $result = $this->conn->query($this->query);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->rows[] = $row;
            }
        }
        $this->close_connection();
    }
}
