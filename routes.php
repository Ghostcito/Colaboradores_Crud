<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . "/controller/ColaboradorController.php";
    $controller = new ColaboradorController();
    $controller->create();
}


switch ($_SERVER["REQUEST_METHOD"]) {
    case "POST":
        require_once __DIR__ . "/controller/ColaboradorController.php";
        $controller = new ColaboradorController();
        $controller->create();
        break;

}
