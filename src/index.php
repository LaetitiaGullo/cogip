<?php
declare(strict_types=1);
require_once "Controller/HomepageController.php";
require_once "Controller/InvoicespageController.php";
require_once "Controller/ContactspageController.php";
require_once "Controller/CompaniespageController.php";
require_once "Controller/ClientspageController.php";
require_once "Controller/SupplierspageController.php";

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

$controller->render($_GET, $_POST);