<?php
require_once "./Model/InvoicespageManager.php";

class InvoicespageController
{
    public function render(array $GET, array $POST)
    {
        $invoices = new AllInvoicesManager();

        require "./View/invoicespage.php";
    }
}