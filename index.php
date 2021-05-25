<?php

    require 'vendor/autoload.php';
        
    function dd($a)
    {
        die(var_dump($a));
    }

    if (Request::uri() == '') {
        header('Location: home');
    }

    function partial($a, $args)
    {
        extract($args);
        include "views/partials/$a.php";
    }

    function barBtn($a)
    {
        return (Request::uri()==$a) ? 'btn-primary' : '';
    }

    require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
