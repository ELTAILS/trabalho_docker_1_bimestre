<?php

try {
    require_once __DIR__ . "/../vendor/autoload.php";
    echo "deu bom";
} catch (Exception $e){
    echo "deu bosta" . $e->getMessage();
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