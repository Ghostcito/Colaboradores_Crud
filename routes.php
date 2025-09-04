<?php
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'create':
        require_once 'controller/ColaboradorController.php';
        $controller = new ColaboradorController();
        $controller->create();
        break;

    case 'edit':
        require_once 'controller/ColaboradorController.php';
        $controller = new ColaboradorController();
        $controller->edit($_GET['id']);
        break;

    case 'delete':
        require_once 'controller/ColaboradorController.php';
        $controller = new ColaboradorController();
        $controller->delete($_GET['id']);
        break;


}