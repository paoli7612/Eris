<?php


$config = require 'config.php';

$query = require 'core/bootstrap.php';

$corsi = $query->selectAll('corsi', 'Corso');

include "views/corsi.view.php";
