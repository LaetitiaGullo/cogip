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
            $success = true;
            $username = verifyInput($_POST["username"]);
            $password = verifyInput($_POST["pass"]);
            $passwordConf = verifyInput($_POST["conf-pass"]);
        
            if(!isset($username) || empty($username)){
                $success = false;
                echo "Please enter an email address";
            }

            if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
                $success = false;
                echo "Not a valid email address";
            }

            if ($inscription->verifyUsername()){
                $success = false;
                echo "This email address already exists";
            }

            if(!isset($password) || empty($password)){
                $success = false;
                echo "Please enter a password";
            }

            if(strlen($password) < 4){
                $success = false;
                echo "The password must contains at least 4 characters";
            }

            if($password !== $passwordConf){
                $success = false;
                echo "Password confirmation does not match";
            }

            if($success){
                /*$newUser =*/ $inscription -> setInscription();
            }
        }

        require "./View/inscriptionpage.php";
    }
}