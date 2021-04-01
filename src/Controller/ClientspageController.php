<?php
require_once "./Model/ClientspageManager.php";

class ClientspageController
{
    public function render(array $GET, array $POST)
    {
        $clients = new ClientsManager();

        require "./View/clientspage.php";
    }
}