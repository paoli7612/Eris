<?php

    class Argomento
    {
    }

    class Corso
    {
        const NEW = 1;

        public $id;
        public $titolo;
        public $anno;
        public $idProfessore;

        public $argomenti; // []
    }
