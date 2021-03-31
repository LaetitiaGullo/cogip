<?php
require_once "./Model/InvoicesManager.php";
require_once "./Model/ContactsManager.php";
require_once "./Model/CompaniesManager.php";

class HomepageController
{
    public function render()
    {
        $invoices = new InvoicesManager();
        $contacts = new ContactsManager();
        $companies = new CompaniesManager();

        require "./View/homepage.php";
    }
}