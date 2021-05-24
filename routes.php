<?php
    require 'core/Router.php';
    $router = new Router;

    $router->define([
        '' => 'controllers/HomeController.php',
        'home' => 'controllers/HomeController.php'
    ]);
