<!-- dbh.inc.php = database handler includes php -->
<?php

// dsn = data source name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
// user & password set to default xampp config
$dbusername = "root";
$dbpassword = "";

// pdo = php data objects / instead of mysqli
// setting up data base connection and simple try catch error handling
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
