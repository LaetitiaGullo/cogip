<?php
require_once "./Model/HomepageManager.php";

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