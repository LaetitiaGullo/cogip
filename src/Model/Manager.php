<?php
declare(strict_types=1);
require "environment.php";

class Manager
{
    protected function connectDb()
    {
        try {
                $db = new PDO("mysql:host=remotemysql.com;dbname=awreN8faZl;port=3306",$_ENV["USER"],$_ENV["PASSWORD"], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
                return $db;
            } catch (Exception $e) {
                die("Error : " . $e->getMessage());
            }
    }
}