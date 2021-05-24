<?php
    $config = require 'config.php';

    $database = require 'core/bootstrap.php';

    $uri = trim($_SERVER['REQUEST_URI'], '/');
    $method = $_SERVER['REQUEST_METHOD'];




    require Router::load('routes.php')
        ->direct($uri, $method);
