<?php
require_once "./Model/AdminHomepageManager.php";

class AddCompanyController
{
    public function render(array $GET, array $POST)
    {
        $newCompany = new AddCompanyManager();

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
            $companyName = verifyInput($_POST["companyName"]);
            $VAT = verifyInput($_POST["VAT"]);
            $country = verifyInput($_POST["country"]);
        
            if(!isset($companyName) || empty($companyName)){
                $success = false;
                echo "<script> alert('Please enter a company name') </script>";
                /*echo
                "
                <div class='popup'>
                    <a class='close' href='#'>&times;</a>
                    <p>Please enter a company name</p>
                </div>
                ";*/
            }

            if(!isset($VAT) || empty($VAT)){
                $success = false;
                echo "<script> alert('Please enter a VAT number') </script>";
            }

            if(!isset($country) || empty($country)){
                $success = false;
                echo "<script> alert('Please enter a country') </script>";
            }

            if(!isset($_POST["companyType"]) || empty($_POST["companyType"])){
                $success = false;
                echo "<script> alert('Please choose a company type') </script>";
            }

            if ($newCompany->verifyCompanyname()){
                $success = false;
                echo "<script> alert('This company already exists') </script>";
            }

            if ($newCompany->verifyVAT()){
                $success = false;
                echo "<script> alert('This VAT number already exists') </script>";
            }

            if($success){
                $newCompany -> addCompany();
            }
        }

        require "./View/addcompanypage.php";
    }
}