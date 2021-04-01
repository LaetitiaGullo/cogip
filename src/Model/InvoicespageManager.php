<?php
declare(strict_types=1);
require_once "Manager.php";

class AllInvoicesManager extends Manager
{
    public function getAllInvoices()
    {
        $db = $this->connectDb();
        try {
            // /!\ add type from Company or from Company_type !
            $result = $db->prepare("SELECT invoiceNumber, invoiceDate, companyName FROM `Invoice` ORDER BY invoiceDate DESC");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}