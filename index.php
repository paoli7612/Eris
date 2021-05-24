<?php

    $config = require 'config.php';

    $query = require 'bootstrap.php';

    require 'Corso.php';


    
    $corsi = $query->selectAll('corsi', 'Corso');


    require 'views/index.view.php';
