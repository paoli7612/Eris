<?php

use Illuminate\Support\Facades\Request;

class Colors
{
    public static function btn($name)
    {
        return 'btn-' . config("app.colors.$name");
    }

    public static function boutline($name)
    {
        return 'btn-outline-' . config("app.colors.$name");
    }

    public static function bactive($name)
    {
        return Request::is(active($name)) ? Colors::btn($name) : Colors::boutline($name);
    }
}

    class Icons
    {
        public static function i($name)
        {
            return "<i class=\"fa fa-" . config("app.icons.$name") . "\"></i>";
        }
    }

    function active($name)
    {
        if ($name == 'home') {
            return '/';
        } else {
            return $name.'*';
        }
    }
