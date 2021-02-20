<?php
require_once './vendor/autoload.php';

define('BASE_URL', '/Homework');

$url = $_SERVER['REDIRECT_URL'] ?? $_SERVER['REQUEST_URI'];
$url = str_replace(BASE_URL, '', $url);

$path = explode('/', $url);
$controller = $path[1] ?? '';
$action = $path[2] ?? '';

switch (strtolower($controller)) {
    case 'venda':
        $controller = 'Venda';
        break;
    default:
        $controller = 'Vendedor';
        break;
}

if (!$action) {
    $action = 'listarAction';
} else {
    $action = strtolower($action);
    $action = "{$action}Action";
}

$controller = "Homework\\controller\\$controller";
$controller = new $controller();
$controller->$action();
