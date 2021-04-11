<?php
require_once "./Model/AdminHomepageManager.php";

class AddContactController
{
    public function render(array $GET, array $POST)
    {
        $newContact = new AddContactManager();

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
            $contactName = verifyInput($_POST["contactName"]);
            $phoneNumber = $_POST["phoneNumber"];
            $email = $_POST["email"];
            // $company = $_POST["company"];
        
            if(!isset($contactName) || empty($contactName)){
                $success = false;
                echo "Please enter a contact name";
            }

            if(!isset($phoneNumber) || empty($phoneNumber)){
                $success = false;
                echo "Please enter a phone number";
            }

            if(!isset($email) || empty($email)){
                $success = false;
                echo "Please enter an email address";
            }

            if(!isset($_POST["company"]) || empty($_POST["company"])){
                $success = false;
                echo "Please choose a company";
            }

            // if ($newContact->verifyContact()){
            //     $success = false;
            //     echo "This contact already exists";
            // }

            if($success){
                $newContact -> addContact();
            }
        }

        require "./View/addcontactpage.php";
    }
}