<?php

require_once __DIR__.'/../vendor/autoload.php';

use Framework\Router;

$url = $_SERVER['REQUEST_URI'];

switch($url) {
    case '/homepage':
        $controller = new App\Controller\HomeController();
        $controller->homepage();
        break;
}

$router = new Router();

$router->addRoute('/homepage', 'HomeController', 'homepage');
$router->addRoute('/login', 'HomeController', 'login');
$router->addRoute('/article/{id}', 'HomeController', 'login');

$router->dispatchRoute($url);