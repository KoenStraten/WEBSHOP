<?php
class Database {

    private $conn;
    private $result;

    public function __construct($database) {
        include('config.php');
        $this->conn = new mysqli($servername, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function doSQL($sql) {
        $this->result = $this->conn->query($sql);
    }

    public function getRecord() {
        return $this->result->fetch_assoc();
    }

    public function getAmountOfResults() {
        return $this->result->num_rows;
    }
}
?>