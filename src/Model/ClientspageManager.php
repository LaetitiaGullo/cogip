<?php
declare(strict_types=1);
require_once "Manager.php";

class ClientsManager extends Manager
{
    public function getClients()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT companyName, VAT, country FROM `Company` WHERE companyType = 'Client' ORDER BY companyName");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}