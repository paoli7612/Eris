<?php

class HomeController
{
    public function index()
    {
        //$corsi = $query->selectAll('corsi', 'Corso');

        include "views/corsi/all.view.php";
    }
}

return new HomeController;
