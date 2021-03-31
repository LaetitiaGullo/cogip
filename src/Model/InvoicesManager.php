<?php
declare(strict_types=1);
require_once "Manager.php";

class InvoicesManager extends Manager
{
    public function getInvoices()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT invoiceNumber, invoiceDate, companyName FROM `Invoice` ORDER BY invoiceDate DESC LIMIT 5");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}