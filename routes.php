<?php

    include 'core/Router.php';
    $router = new Router();

    $router->get('/corsi', 'controllers/CorsiController.php');
    $router->redirect('/', 'home');
    $router->get('/home', 'controllers/HomeController.php');
