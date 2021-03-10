<?php

namespace Framework;

class Router
{
    const NAMESPACES_CONTROLLER = 'App\Controller\\';

    private array $routes;

    public function addRoute(string $url, string $controller, string $action)
    {
        $this->routes[$url] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatchRoute(string $url)
    {
        foreach($this->routes as $route => $routeParameter)
        {
            if ($route === $url)
            {
                return $this->callActionController($routeParameter);
            }
        }

        dd('nope');
    }

    private function callActionController(array $routeParameters)
    {
        $controllerName = self::NAMESPACES_CONTROLLER . $routeParameters['controller'];
        $action = $routeParameters['action'];

        $controller = new $controllerName();
        $controller->$action();
    }
}