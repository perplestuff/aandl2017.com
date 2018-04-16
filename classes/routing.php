<?php

class routing
{
    public $routes;
    public function __construct($file)
    {
        $route = require $file;
        $this->routes = $route;
    }
    public function redirect($uri)
    {
        if (array_key_exists ($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        echo '404 not found';
    }
}
