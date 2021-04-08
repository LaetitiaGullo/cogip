<?php
declare(strict_types=1);
require_once "Manager.php";

class LastInvoicesManager extends Manager
{
    public function getLastInvoices()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT invoiceNumber, invoiceDate, invoiceCompany FROM `Invoice` ORDER BY invoiceDate DESC LIMIT 5");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}

class LastContactsManager extends Manager
{
    public function getLastContacts()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT contactName, phoneNumber, email, company FROM `Contacts` ORDER BY id DESC LIMIT 5");
            $result->execute();
            return $result->fetchAll();
            
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}

class LastCompaniesManager extends Manager
{
    public function getLastCompanies()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT companyName, VAT, country, companyType FROM `Company` ORDER BY id DESC LIMIT 5");
            $result->execute();
            return $result->fetchAll();
            
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}