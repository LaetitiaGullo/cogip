<?php
declare(strict_types=1);
require_once "Manager.php";

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