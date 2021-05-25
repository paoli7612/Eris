<?php
    
    function dd($a)
    {
        die(var_dump($a));
    }

    require 'vendor/autoload.php';
    
    require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
