<?php
    $config = require 'config.php';
    $database = require 'core/bootstrap.php';

    require Router::load('routes.php')
        ->direct(Request::uri(), Request::method());
