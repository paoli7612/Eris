<?php
    require 'core/corso.php';
    require 'core/Connection.php';
    require 'core/QueryBuilder.php';
    try {
        $connection = new Connection('127.0.0.1', 'eris', 'paoli7612', '7612');
        $queryBuilder = new QueryBuilder($connection);
    } catch (Exception $e) {
        print_r($e);
    }
        

    $corsi = $queryBuilder->selectAll('corsi');

    include "views/index.view.php";
