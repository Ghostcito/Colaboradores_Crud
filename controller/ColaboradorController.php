<?php
require_once __DIR__ . "/../config/Config_Database.php";
require_once __DIR__ . "/../service/ColaboradorService.php";
require_once __DIR__ . "/../model/Colaborador.php";

class ColaboradorController
{
    private $colaboradorService;

    public function __construct()
    {
        $this->colaboradorService = new ColaboradorService();
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colaborador = new Colaborador();
            $colaborador->nombre = $_POST['nombre'];
            $colaborador->cargo = $_POST['cargo'];
            $colaborador->puesto = $_POST['puesto'];
            $colaborador->edad = $_POST['edad'];
            $colaborador->fecha_ingreso = $_POST['fecha_ingreso'];

            if ($this->colaboradorService->create($colaborador)) {
                header('Location: /colaboradores_crud/');
                exit();
            }
        }
    }

    public function edit($id)
    {
        $colaborador = $this->colaboradorService->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colaborador->nombre = $_POST['nombre'];
            $colaborador->cargo = $_POST['cargo'];
            $colaborador->puesto = $_POST['puesto'];
            $colaborador->edad = $_POST['edad'];
            $colaborador->fecha_ingreso = $_POST['fecha_ingreso'];

            if ($this->colaboradorService->update($colaborador)) {
                header('Location: /colaboradores_crud/');
                exit();
            }
        }

    }
    public function delete($id)
    {
        if ($this->colaboradorService->delete($id)) {
            header('Location: /colaboradores_crud/');
            exit();
        }
    }


}