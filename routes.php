<?php

require_once __DIR__ . "/controller/ColaboradorController.php";
require_once __DIR__ . "/model/Colaborador.php";
$controller = new ColaboradorController();

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['action']) && $_GET['action'] === 'edit') {
    $colaborador = $controller->edit($_GET['id']); // pedimos el colaborador de BD
    require "index.php"; // cargamos la vista principal
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['action'])) {

    switch ($_GET["action"]) {
        case 'save':
            $colaborador = new Colaborador();
            $colaborador->id = $_POST['id']; // importante para update
            $colaborador->nombre = $_POST['nombre'];
            $colaborador->cargo = $_POST['cargo'];
            $colaborador->puesto = $_POST['puesto'];
            $colaborador->edad = $_POST['edad'];
            $colaborador->fecha_ingreso = $_POST['fecha_ingreso'];

            $controller->create($colaborador);
            break;

        case 'update':

            $colaborador = new Colaborador();
            $colaborador->id = $_POST['id'];   // importante, para saber qué registro actualizar
            $colaborador->nombre = $_POST['nombre'];
            $colaborador->cargo = $_POST['cargo'];
            $colaborador->puesto = $_POST['puesto'];
            $colaborador->edad = $_POST['edad'];
            $colaborador->fecha_ingreso = $_POST['fecha_ingreso'];
            $controller->update($colaborador);
            break;

    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && isset($_GET['id'])) {
    switch ($_GET['action']) {
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
    }
}

?>