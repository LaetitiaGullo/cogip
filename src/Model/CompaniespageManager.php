<?php
declare(strict_types=1);
require_once "Manager.php";

class AllCompaniesManager extends Manager
{
    public function getAllCompanies()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT companyName, VAT, country FROM `Company` ORDER BY companyName");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}