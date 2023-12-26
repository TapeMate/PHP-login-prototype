<?php
// strict type declaration
declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Signup</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Signup</button>
    </form>

</body>

<style>
    html {
        background: #333333;
        color: tomato;
        font-family: Arial, Helvetica, sans-serif;
    }

    h3 {
        width: 300px;
        text-align: center
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 300px;
        height: max-content;
    }

    button {
        margin-top: 20px;
    }
</style>

</html>