<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    // instead of require you could also use include or include_once
    // difference: require puts out an error. include only gives a warning
    // _once checks in both cases if script hast allready been inserted yet
    try {
        require_once "dbh.inc.php";

        // first on "?" as placeholder later then with proper paremeter names in VALUE
        // $query contains SQL insert statement
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        // prepared statement on data for prevent SQL injection 
        // submitting query to database using $pdo out of dbh.inc.php with credentials
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        // closing up database connection - happens automatic but it is best practice to do so
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        // die on running connections, exit on non connections
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}