<?php

    class Corso
    {
        private $titolo;
        public function __construct($titolo)
        {
            $this->titolo = $titolo;
        }
    }

    $corsi = array();

    $pdo = new PDO("mysql:host=127.0.0.1;dbname=eris", 'paoli7612', '7612');
    include "index.view.php";
