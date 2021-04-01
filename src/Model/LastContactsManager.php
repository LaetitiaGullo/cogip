<?php
declare(strict_types=1);
require_once "Manager.php";

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