<?php


$corsi = $query->selectAll('corsi', 'Corso');

include "views/corsi/all.view.php";
