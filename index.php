<?php

    require 'routes.php';

    $config = require 'config.php';

    $database = require 'core/bootstrap.php';


    $controller = $router->direct(
        trim($_SERVER['REQUEST_URI'], '/'),
        $_SERVER['REQUEST_METHOD']
    );

    require $controller;
