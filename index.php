<?php
    require 'corso.php';
    

    $corsi = array();


    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=eris", 'paoli7612', '7612');
    } catch (PDOException $e) {
        die('Connesione con il database fallita');
    }

    $statement = $pdo->prepare("SELECT * FROM corsi;");

    $statement->execute();

    $corsi = $statement->fetchAll(PDO::FETCH_CLASS, 'Corso');

    include "views/index.view.php";
