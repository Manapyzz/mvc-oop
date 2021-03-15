<?php

require_once __DIR__.'/../vendor/autoload.php';

//use Framework\Router;
use Bramus\Router\Router;
//
// Create Router instance
$router = new Router();

$router->get('/homepage', '\App\Controller\HomeController@homepage');
$router->get('/account/create', '\App\Controller\AccountController@showAccountForm');
$router->post('/account/create', '\App\Controller\AccountController@showAccountForm');
//$router->post('/article/create/post', '\App\Controller\HomeController@createArticle');
//$router->get('/article/show', '\App\Controller\ArticleController@show');
//$router->get('/article/{id}', '\App\Controller\HomeController@showArticle');

// Run it!
$router->run();
//
//$router = new Router();
//
//$router->addRoute('/homepage', 'HomeController', 'homepage');
//$router->addRoute('/login', 'HomeController', 'login');
//$router->addRoute('/article/{id}', 'HomeController', 'login');
//
//$router->dispatchRoute($url);