<?php
require_once "./Model/SupplierspageManager.php";

class SupplierspageController
{
    public function render(array $GET, array $POST)
    {
        $suppliers = new SuppliersManager();

        require "./View/supplierspage.php";
    }
}