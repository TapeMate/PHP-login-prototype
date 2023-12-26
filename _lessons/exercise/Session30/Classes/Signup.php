<?php

// extends Dbh makes Signup child of Dbh class
// able to access methods and props in Dbh in Signup class
class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    // create query method
    private function insertUser()
    {
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd);";
        // $this would be problematic and could cause errors
        // $stmt = $this->connect()->prepare($query);
        // use parent:: instead
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if (isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser()
    {
        // Error handlers
        if ($this->isEmptySubmit()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }

        // If no errors, signup user
        $this->insertUser();
    }
}