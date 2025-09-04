<?php
class Config_Database extends PDO {
    private $host = "localhost";
    private $port = "3307"; // porque usas XAMPP
    private $dbname = "capacitacion";
    private $username = "root";
    private $password = "";
    public $conn;

    public function __construct() {
        try {
            parent::__construct(
                "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname,
                $this->username,
                $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
