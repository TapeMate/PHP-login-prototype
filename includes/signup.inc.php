<?php

// first on check if user made post request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        // order is important
        // sidenote: mvc model view controler
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // ERROR HANDLERS
        // empty array to store error key and message
        $errors = [];

        if (is_input_empty($username, $pwd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }

        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }

        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }

        // require config for session variables
        require_once "config_session.inc.php";

        // if there is no data in here it returns false otherwise true
        if ($errors) {
            // store error into session variable
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../index.php");
            die();
        }

        // IMPORTANT SIDENODE FOR FUTURE DEVELOPMENT IN PHP, DUE TO AN ERROR HERE !!!
        // instead of passing in all parameters one by one and remember the right order use:
        // 1. associative array to structure the data and give it clear names
        // 2. implement / use object oriented programming and pass an object
        // 3. use named arguments (new in PHP 8.x)
        create_user($pdo, $username, $pwd, $email);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}