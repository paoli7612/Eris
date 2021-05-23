<?php

require 'core/Corso.php';
require 'core/Connection.php';
require 'core/QueryBuilder.php';


try {
    $connection = new Connection($config['database']);
    return new QueryBuilder($connection);
} catch (PDOException $e) {
    print_r($e);
}
