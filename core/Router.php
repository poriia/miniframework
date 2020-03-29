<?php

namespace App\Core;

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
    
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $methodType)
    {
        if (!array_key_exists($uri, $this->routes[$methodType])) {
            throw new \Exception('No route defined for this uri!');
        }
        
        return $this->callAction(...explode('@', $this->routes[$methodType][$uri]));
    }
    
    private function callAction($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";
        if (!method_exists($controller, $method)) {
            throw new \Exception("{$controller} does not this {$method}");
        }
        
        return (new $controller)->$method();
    }
}