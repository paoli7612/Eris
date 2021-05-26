<?php
    require 'core/functions.php';
    require 'vendor/autoload.php';

    if (Request::uri() == '') {
        header('Location: home');
    }


    require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
