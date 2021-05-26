<?php

    function dd($a)
    {
        die(var_dump($a));
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
