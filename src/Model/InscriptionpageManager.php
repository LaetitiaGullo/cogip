<?php
declare(strict_types=1);
require_once "Manager.php";


class InscriptionManager extends Manager
{
    public function setInscription()
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare('INSERT INTO `Users` (username, pass) VALUES("'. $_POST["username"] . '", "' . password_hash($_POST["pass"], PASSWORD_DEFAULT) . '")');
            $result->execute();

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }    
    }
}