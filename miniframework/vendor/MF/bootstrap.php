<?php

namespace MF\Init;

abstract class Bootstrap {

    private $routes;

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function getRoutes() {
        return $this->routes;
    }

    abstract protected function initRoutes();

    public function run($url) {
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route['route']) {
                $class = "app\\Controller\\" . $route['controller'];
                $action = $route['action'];
                $controller = new $class();
                $controller->$action();
                return;
            }
        }
        // If no corresponding route is found, you can handle it here
        echo "Route not found!";
    }

    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
