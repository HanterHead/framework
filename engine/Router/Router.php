<?php

namespace Engine\Router;

class  Router
{
    public static $routes = [];

    public static $route = [];

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public static function add($route,$controller,$method = 'GET')
    {
        self::$routes[$route] = compact('controller','method');
    }

}







