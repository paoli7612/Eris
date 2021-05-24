<?php

    $corsi = $query->selectAll('corsi', 'Corso');

    require 'views/index.view.php';
