<?php

// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check for html code injection !IMPORTANT:
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstname)) {
        header("Location: ../index.php");
        exit();
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    // sends to user back to the front page:
    header("Location: ../index.php");
} else {
    // sends the user back any way, in case user entered the site on no regular way:
    header("Location: ../index.php");
}
