<?php

    class Router
    {
        protected $routes = [];

        public function define($routes)
        {
            $this->routes = $routes;
        }

        public function direct($uri, $method)
        {
            if (!array_key_exists($uri, $this->routes)) {
                throw new Exception('404');
            }
            return $this->routes[$uri];
        }
    }
