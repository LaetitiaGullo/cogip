<?php
require_once "./Model/LastInvoicesManager.php";
require_once "./Model/LastContactsManager.php";
require_once "./Model/LastCompaniesManager.php";

class HomepageController
{
    public function render(array $GET, array $POST)
    {
        $invoices = new LastInvoicesManager();
        $contacts = new LastContactsManager();
        $companies = new LastCompaniesManager();

        require "./View/homepage.php";
    }
}