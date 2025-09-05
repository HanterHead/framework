<?php

namespace Engine\Router;

class Route
{
    public static $routes = [];

    public static $route = [];

    public static function add($route,$controller,$middleware = 'user', $method = 'GET')
    {
        self::$routes[$route] = [
            'controller' => $controller,
            'middleware' => $middleware,
            'method' => $method

        ];
    }
}







