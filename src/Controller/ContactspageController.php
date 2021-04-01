<?php
require_once "./Model/ContactspageManager.php";

class ContactspageController
{
    public function render(array $GET, array $POST)
    {
        $contacts = new AllContactsManager();

        require "./View/contactspage.php";
    }
}