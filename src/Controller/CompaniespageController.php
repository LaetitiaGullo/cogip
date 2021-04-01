<?php
require_once "./Model/CompaniespageManager.php";

class CompaniespageController
{
    public function render(array $GET, array $POST)
    {
        $companies = new AllCompaniesManager();

        require "./View/companiespage.php";
    }
}