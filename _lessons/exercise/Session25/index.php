<?php
session_start();

$_SESSION["username"] = "Krossing";

// unsets specific session data
//unset($_SESSION["username"]); 

// purges all session data with this method
//session_unset();

// deletes and stops session
// does not purge data on current page
// to unset and destroy always combinde unset + destroy
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- username gets carried over to this side from index.php via cookie information -->
    <?php
    echo $_SESSION["username"];
    ?>

</body>

<style>
    html {
        background: #333333;
        color: tomato;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

</html>