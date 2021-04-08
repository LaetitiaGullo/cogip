<?php
require_once "./Model/AdminHomepageManager.php";

class AdminHomepageController
{
    public function render(array $GET, array $POST)
    {
        $invoices = new LastInvoicesManager();
        $contacts = new LastContactsManager();
        $companies = new LastCompaniesManager();

        require "./View/adminHomepage.php";
    }
}