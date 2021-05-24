<?php

class ProfessoriController
{
    public function index()
    {
        //$professori = $query->selectAll('professori', 'Professore');

        include "views/professori/all.view.php";
    }
}

return new ProfessoriController;
