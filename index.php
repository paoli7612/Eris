<?php

    class Corso
    {
        private $titolo;
        public function __construct($titolo)
        {
            $this->titolo = $titolo;
        }
    }

    $corsi = [
        new Corso('Analisi matematica 1'),
        new Corso('Algebra lineare'),
        new Corso('Programmazione 1')
    ];

    include "index.view.php";
