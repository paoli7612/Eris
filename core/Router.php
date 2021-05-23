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
        $d = $this->routes['redirect'][$uri];
        if (!is_null($d)) {
            header("Location: $d");
        }

        $r = $this->routes[$method];
        if (array_key_exists($uri, $r)) {
            return $r[$uri];
        } else {
            throw new Exception("eh no eh");
        }
    }
}
