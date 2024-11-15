<?php
require_once '../config/config.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/UserController.php';

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

$controllerName = ucfirst($controller) . 'Controller';
$controllerFile = "../app/controllers/{$controllerName}.php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerInstance = new $controllerName();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo "Accion no encontrada.";
    }
} else {
    echo "Controlador no encontrado.";
}
