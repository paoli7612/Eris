<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                "mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'] . "",
                $config['username'],
                $config['password']
            );
        } catch (PDOException $th) {
            die($th->getMessage());
        }
    }
}
