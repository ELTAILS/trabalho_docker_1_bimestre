<?php

use App\Controller\ProdutoController;

require_once __DIR__ . "/../vendor/autoload.php";

define('BASE_URL', 'localhost:8080/frontend');

$controller = new ProdutoController();

$url = trim($_GET['url'] ?? '/');

switch($url){
    case '/':
        $controller->index();
        break;
    case 'produto':
        $controller->show((int)($_GET['id'] ?? 0));
        break;
    case 'produto/create':
        $controller->create();
        break;
    case 'produto/update':
        $controller->update((int)($_GET['id'] ?? 0));
        break;
    default:
        include_once './frontend/pages/erro.php';
        break;
}
