<?php

    include 'core/Router.php';
    $router = new Router();

    $router->get('/corsi', 'CorsiController@index');
    $router->get('/corsi/new', 'CorsiController@new');

    $router->get('/professori', 'ProfessoriController@index');
    
    $router->get('/argomenti', 'CorsiController@argomenti');

    $router->redirect('/', 'home');
    $router->get('/home', 'HomeController@index');
