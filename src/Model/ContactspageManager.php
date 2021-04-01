<?php
declare(strict_types=1);
require_once "Manager.php";

class AllContactsManager extends Manager
{
    public function getAllContacts()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT contactName, phoneNumber, email, company FROM `Contacts` ORDER BY contactName");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}