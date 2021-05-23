<?php

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
        'redirect' => []
    ];

    public function get($uri, $dest)
    {
        $this->routes['GET'][$uri] = $dest;
    }

    public function post($uri, $dest)
    {
        $this->routes['POST'][$uri] = $dest;
    }

    public function redirect($uri, $dest)
    {
        $this->routes['redirect'][$uri] = $dest;
    }

    public function page($uri, $method)
    {
        $r = $this->routes[$method];

        $d = $this->routes['redirect'][$uri];
        if (isset($d)) {
            header("Location: $d");
        }
        return $r[$uri];
    }
}
