<?php
declare(strict_types=1);
require_once "Manager.php";

class ConnexionManager extends Manager
{
    public function getConnexion()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare("SELECT username, pass FROM `Users`");
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}