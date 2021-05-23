<?php


require 'core/bootstrap.php';


    

$corsi = $queryBuilder->selectAll('corsi', 'Corso');

include "views/index.view.php";
