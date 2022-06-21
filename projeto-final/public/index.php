<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;
use FTP\Connection;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoutes(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoutes(IndexController::class, 'indexAction'),
    '/produtos' => createRoutes (ProductController::class, 'listAction'),
    '/produtos/novo' => createRoutes (ProductController::class, 'addAction'),
    '/produtos/editar' => createRoutes (ProductController::class, 'editAction'),
    
];

if (false === isset($routes[$url])) {
    ( new ErrorController())->notFoundAction();
    exit; 
} 

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

var_dump($routes[$url]);



