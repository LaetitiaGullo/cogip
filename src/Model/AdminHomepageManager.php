<?php
declare(strict_types=1);
require_once "Manager.php";
// require_once "HomepageManager.php";

class AddInvoiceManager extends Manager
{
    public function addInvoice()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare('INSERT INTO `Invoice` (invoiceNumber, invoiceDate, invoiceCompany) VALUES("'. $_POST["invoiceNumber"] . '", "' . $_POST["invoiceDate"] . '", "' . $_POST["invoiceCompany"] . '")');
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

    public function verifyInvoiceNumber()
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare('SELECT invoiceNumber FROM `Invoice` WHERE (invoiceNumber = "' . $_POST['invoiceNumber'] . '")');
            $result->execute();
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }
}

class AddContactManager extends Manager
{
    public function addContact()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare('INSERT INTO `Contacts` (contactName, phoneNumber, email, company) VALUES("'. $_POST["contactName"] . '", "' . $_POST["phoneNumber"] . '", "' . $_POST["email"] . '", "' . $_POST["company"] . '")');
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

    // public function verifyContact()
    // {
    //     $db = $this->connectDb();

    //     try {
    //         $result = $db->prepare('SELECT contactName, phoneNumber, email FROM `Contacts` WHERE (contactName = "' . $_POST['contactName'] . '"), (phoneNumber = "' . $_POST['phoneNumber'] . '"), (email = "' . $_POST['email'] . '")');
    //         $result->execute();
    //         return $result -> fetch();
        
    //     } catch (Exception $e) {
    //         die("Error : " . $e->getMessage());
    //     }
    // }
}

class AddCompanyManager extends Manager
{
    public function addCompany()
    {
        $db = $this->connectDb();
        try {
            $result = $db->prepare('INSERT INTO `Company` (companyName, VAT, country, companyType) VALUES("'. $_POST["companyName"] . '", "' . $_POST["VAT"] . '", "' . $_POST["country"] . '", "' . $_POST["companyType"] . '")');
            $result->execute();
            return $result;

        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

    public function verifyCompanyname()
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare('SELECT companyName FROM `Company` WHERE (companyName = "' . $_POST['companyName'] . '")');
            $result->execute();
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

    public function verifyVAT()
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare('SELECT VAT FROM `Company` WHERE (VAT = "' . $_POST['VAT'] . '")');
            $result->execute();
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }
}

// class LastInvoicesManager extends Manager
// {
//     public function getLastInvoices()
//     {
//         $db = $this->connectDb();
//         try {
//             $result = $db->prepare("SELECT invoiceNumber, invoiceDate, invoiceCompany FROM `Invoice` ORDER BY invoiceDate DESC LIMIT 5");
//             $result->execute();
//             return $result;

//         } catch (Exception $e) {
//             die("Error : " . $e->getMessage());
//         }    
//     }
// }

// class LastContactsManager extends Manager
// {
//     public function getLastContacts()
//     {
//         $db = $this->connectDb();
//         try {
//             $result = $db->prepare("SELECT contactName, phoneNumber, email, company FROM `Contacts` ORDER BY id DESC LIMIT 5");
//             $result->execute();
//             return $result->fetchAll();
            
//         } catch (Exception $e) {
//             die("Error : " . $e->getMessage());
//         }    
//     }
// }

// class LastCompaniesManager extends Manager
// {
//     public function getLastCompanies()
//     {
//         $db = $this->connectDb();
//         try {
//             $result = $db->prepare("SELECT companyName, VAT, country, companyType FROM `Company` ORDER BY id DESC LIMIT 5");
//             $result->execute();
//             return $result->fetchAll();
            
//         } catch (Exception $e) {
//             die("Error : " . $e->getMessage());
//         }    
//     }
// }