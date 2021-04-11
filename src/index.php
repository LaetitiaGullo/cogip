<?php
declare(strict_types=1);
require_once "Controller/HomepageController.php";
require_once "Controller/InvoicespageController.php";
require_once "Controller/ContactspageController.php";
require_once "Controller/CompaniespageController.php";
require_once "Controller/ClientspageController.php";
require_once "Controller/SupplierspageController.php";
require_once "Controller/InscriptionpageController.php";
require_once "Controller/ConnexionpageController.php";
require_once "Controller/AdminHomepageController.php";
require_once "Controller/AddInvoiceController.php";
require_once "Controller/AddContactController.php";
require_once "Controller/AddCompanyController.php";

$controller = new HomepageController();

if (isset($_GET["page"]) && $_GET["page"] === "invoices")
{
    $controller = new InvoicespageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "contacts")
{
    $controller = new ContactspageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "companies")
{
    $controller = new CompaniespageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "clients")
{
    $controller = new ClientspageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "suppliers")
{
    $controller = new SupplierspageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "inscription")
{
    $controller = new InscriptionpageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "connexion")
{
    $controller = new ConnexionpageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "admin")
{
    $controller = new AdminHomepageController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "addinvoice")
{
    $controller = new AddInvoiceController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "addcontact")
{
    $controller = new AddContactController();
}
elseif (isset($_GET["page"]) && $_GET["page"] === "addcompany")
{
    $controller = new AddCompanyController();
}

$controller->render($_GET, $_POST);