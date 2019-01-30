<?php

namespace core;

/**
 * class for managing different routes
 *
 * @author Muhammed Alsaied
 */
class Router {

    private static $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load(String $uri, String $method) {
        if (array_key_exists($uri, self::$routes[$method])) {
            $exploded = explode('@', self::$routes[$method][$uri]);
            $controller_class = '\app\\contollers\\' . $exploded[0];
            $action = $exploded[1];


            if (!class_exists($controller_class)) {
                throw new \Exception("Undefined controller {$controller_class}");
            }

            $controller = new $controller_class();

            if (!method_exists($controller, $action)) {
                throw new Exception("{$controller_class} has no '{$action}' method");
            }

            $controller->$action();
        } else {
            require './views/404.view.php';
        }
    }

    /**
     * Load GET routes
     * @param array $routes
     */
    public static function GET(array $routes) {
        foreach ($routes as $route => $controller) {
            self::$routes['GET'][$route] = $controller;
        }
    }

    /**
     * Load GET routes
     * @param array $routes
     */
    public static function POST($routes) {
        foreach ($routes as $route => $controller) {
            self::$routes['POST'][$route] = $controller;
        }
    }

}
