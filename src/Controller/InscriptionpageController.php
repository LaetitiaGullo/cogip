<?php
require_once "./Model/InscriptionpageManager.php";

class InscriptionpageController
{
    public function render(array $GET, array $POST)
    {
        $inscription = new InscriptionManager();
        
        function verifyInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = verifyInput($_POST["username"]);
            $password = verifyInput($_POST["pass"]);
        
            if(!isset($username) || !filter_var($username, FILTER_VALIDATE_EMAIL)){
                echo "Enter your email address";
            }

            if(empty($password)){
                echo "Enter your password";
            }

            $newUser = $inscription -> setInscription();
        }

        require "./View/inscriptionpage.php";
    }
}
