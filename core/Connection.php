<?php

    class Connection extends PDO
    {
        public function __construct($host, $dbname, $uname, $passwd)
        {
            parent::__construct("mysql:host=$host;dbname=$dbname", $uname, $passwd);
        }
    }
