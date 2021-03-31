<?php
declare(strict_types=1);
require_once "Manager.php";

class CompaniesManager extends Manager
{
    public function getCompanies()
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