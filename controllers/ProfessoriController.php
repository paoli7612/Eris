<?php


$professori = $query->selectAll('professori', 'Professore');

include "views/professori/all.view.php";
