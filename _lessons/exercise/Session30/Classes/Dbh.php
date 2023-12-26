<?php

// Dbh class for DB connection
class Dbh
{
    private $host = "localhost";
    private $dbname = "myfirstdatabase";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->host - ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // make sure to return pdo here
            return $pdo;

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
