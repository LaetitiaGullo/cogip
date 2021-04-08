<?php
declare(strict_types=1);
require_once "Manager.php";

class ConnexionManager extends Manager
{
    public function verifyUsername($username)
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare("SELECT * FROM `Users` WHERE username = :username");
            $result->execute(["username"=>$username]);
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

    // public function verifyPassword()
    // {
    //     $db = $this->connectDb();
        
    //     try {
    //         $result = $db->prepare("SELECT pass FROM `Users`");
    //         $result->execute();
    //         $resultat = $result->fetch();
    //         $pass = password_verify($_POST["pass"], $resultat["pass"]);
    //         // $result = $db->prepare("SELECT pass FROM `Users` WHERE pass = $pass");
    //         // $result->execute();
    //         // return $result -> fetch();
        
        // } catch (Exception $e) {
        //     die("Error : " . $e->getMessage());
        // }
    // }
}