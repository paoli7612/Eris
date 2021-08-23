<?php

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
    }
