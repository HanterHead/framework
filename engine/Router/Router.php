<?php

namespace Engine\Router;

class Router
{
    public static $routes = [];

    public static $route = [];

    public static function add($route,$controller,$method = 'GET')
    {
        self::$routes[$route] = compact('controller','method');
    }
}







