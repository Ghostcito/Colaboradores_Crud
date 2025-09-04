<?php
require_once __DIR__ . "/../model/Colaborador.php";
require_once __DIR__ . "/../config/Config_Database.php";

class ColaboradorService
{
    private $conn;
    private $table_name = "colaboradores";

    public function __construct()
    {
        $this->conn = new Config_Database();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "colaborador");
    }

    public function create(Colaborador $colaborador)
    {
        $query = "INSERT INTO " . $this->table_name . " (nombre, cargo, puesto, edad, fecha_ingreso) VALUES (:nombre, :cargo, :puesto, :edad, :fecha_ingreso)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $colaborador->nombre);
        $stmt->bindParam(":cargo", $colaborador->cargo);
        $stmt->bindParam(":puesto", $colaborador->puesto);
        $stmt->bindParam(":edad", $colaborador->edad);
        $stmt->bindParam(":fecha_ingreso", $colaborador->fecha_ingreso);

        return $stmt->execute();
    }

    // Buscar por id
    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchObject("colaborador");
    }

    // Actualizar
    public function update(colaborador $colaborador)
    {
        $query = "UPDATE " . $this->table_name . " 
                  SET nombre = :nombre, cargo = :cargo, puesto = :puesto, edad = :edad, fecha_ingreso = :fecha_ingreso 
                  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $colaborador->nombre);
        $stmt->bindParam(":cargo", $colaborador->cargo);
        $stmt->bindParam(":puesto", $colaborador->puesto);
        $stmt->bindParam(":edad", $colaborador->edad);
        $stmt->bindParam(":fecha_ingreso", $colaborador->fecha_ingreso);
        return $stmt->execute();
    }

    // Eliminar
    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
