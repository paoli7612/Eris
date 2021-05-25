<?php
    
    function dd($a)
    {
        die(var_dump($a));
    }

    function partial($a)
    {
        include "views/partials/$a.php";
    }

    require 'vendor/autoload.php';
    
    require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
