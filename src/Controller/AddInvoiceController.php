<?php
require_once "./Model/AdminHomepageManager.php";

class AddInvoiceController
{
    public function render(array $GET, array $POST)
    {
        $newInvoice = new AddInvoiceManager();

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
            $invoiceNumber = verifyInput($_POST["invoiceNumber"]);
            $invoiceDate = $_POST["invoiceDate"];
            // $invoiceCompany = $_POST["invoiceCompany"];
        
            if(!isset($invoiceNumber) || empty($invoiceNumber)){
                $success = false;
                echo "Please enter an invoice number";
            }

            if(!isset($invoiceDate) || empty($invoiceDate)){
                $success = false;
                echo "Please enter an invoice date";
            }

            if(!isset($_POST["invoiceCompany"]) || empty($_POST["invoiceCompany"])){
                $success = false;
                echo "Please choose a company";
            }

            if ($newInvoice->verifyInvoiceNumber()){
                $success = false;
                echo "This invoice number already exists";
            }

            if(strlen($invoiceNumber) < 13){
                $success = false;
                echo "The invoice number contains at least 13 characters. (Invoice number format : X20210101-001";
            }

            if($success){
                $newInvoice -> addInvoice();
            }
        }

        require "./View/addinvoicepage.php";
    }
}