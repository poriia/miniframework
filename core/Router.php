<?php

class Router
{
    protected $routes
        = [
            'GET'  => [],
            'POST' => [],
        ];
    
    public static function load($file)
    {
        $router = new static;
        require $file;
        
        return $router;
    }
    
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
        
    }
    
    public function post($uri)
    {
        $this->routes['POST'][$uri] = $routes;
    }
    
    public function direct($uri, $methodType)
    {
        if (array_key_exists($uri, $this->routes[$methodType])) {
            return $this->routes[$methodType][$uri];
        }
        
        throw new Exception('No route defined for this uri!');
    }
}