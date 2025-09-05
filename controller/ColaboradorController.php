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

    public function create($colaborador)
    {
        if ($this->colaboradorService->create($colaborador)) {
            header('Location: /colaboradores_crud/');
            exit();
        }

    }

    public function edit($id)
    {
        return $this->colaboradorService->getById($id);
    }

    public function update($colaborador)
    {
        if ($this->colaboradorService->update($colaborador)) {
            header('Location: /colaboradores_crud/');
            exit();
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