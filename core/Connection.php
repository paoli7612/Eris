<?php

    class Connection extends PDO
    {
        public function __construct($config)
        {
            parent::__construct(
                "mysql:host=".$config['host'] .
                ";dbname=".$config['dbname'],
                $config['username'],
                $config['password']
            );
        }
    }
