<?php

$config = require 'config.php';
$query = require 'core/bootstrap.php';

function partial($thing)
{
    require "views/partials/$thing.php";
}

require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
require $router->page($uri, $method);
