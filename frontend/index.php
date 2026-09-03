<?php

require_once __DIR__ . "/../vendor/autoload.php";

try {
    $database = new \App\Database\Database();
    $pdo = $database->connect();
    echo "Conexão bem-sucedida!";
} catch (\Exception $e) {
    echo "Erro: " . $e->getMessage();
}

$url = trim($_GET['url'] ?? '/');

switch($url){
    case '/':
    case 'produtos':
        require __DIR__ . "/produtos/listar.php";
    break;
    default:
        echo "pagina erro";
    break;
}