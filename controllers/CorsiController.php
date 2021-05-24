<?php

class CorsiController
{
    public function index()
    {
        //$corsi = $query->selectAll('corsi', 'Corso');

        include "views/corsi/all.view.php";
    }

    public function argomenti()
    {
        include "views/corsi/all.view.php";
    }
}

return new CorsiController;
