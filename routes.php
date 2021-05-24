<?php

    include 'core/Router.php';
    $router = new Router();

    $router->get('/corsi', 'controllers/CorsiController.php');
    $router->get('/corsi/new', 'controllers/CorsiController.php');

    $router->get('/professori', 'controllers/ProfessoriController.php');

    $router->redirect('/', 'home');
    $router->get('/home', 'controllers/HomeController.php');
