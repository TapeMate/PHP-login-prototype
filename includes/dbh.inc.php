<?php

$host = "localhost";
$dbname = "myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    // attributes for pdo connection. set error mode to exception.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // error handling. getMessage method to print out error msg.
    die("Connection failed: " . $e->getMessage());
}