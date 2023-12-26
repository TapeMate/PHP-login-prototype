<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        // change SQL statement to UPDATE and SET with Param. WHERE
        // ID is pre defined here for showcase
        // in real scenario, user id would be stored in session variable and user would be logged in 
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}