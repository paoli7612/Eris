<?php

function partial($thing)
{
    require "views/partials/$thing.php";
}

function view($name)
{
    return require "views/$name.view.php";
}

function dd($a)
{
    die(var_dump($a));
}
