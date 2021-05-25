<?php

    class Router
    {
        protected $routes = [];

        public static function load($file)
        {
            $router = new static;
            
            $router->define(require $file);

            return $router;
        }

        public function define($routes)
        {
            $this->routes = $routes;
        }

        public function direct($uri, $method)
        {
            if (!array_key_exists($uri, $this->routes)) {
                throw new Exception('404');
            }
            
            
            $dest = $this->routes[$uri];
            $this->call(
                ... explode('@', $dest)
            );
        }

        protected function call($controllerName, $action)
        {
            $controller = new HomeController;
            $controller->$action();
        }
    }
