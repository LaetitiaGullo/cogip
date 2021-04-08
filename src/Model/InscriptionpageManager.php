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

    public function verifyUsername()
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare('SELECT username FROM `Users` WHERE (username = "' . $_POST['username'] . '")');
            $result->execute();
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }
}