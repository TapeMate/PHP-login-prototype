<?php
// require session config and signup view for error handling
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h5 class="username">
        <?php
        output_username();
        ?>
    </h5>

    <h3>LOGIN</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

    <?php
    check_login_errors();
    ?>

    <h3 class="signup">SIGNUP</h3>

    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button>Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>

    <form class="logout" action="includes/logout.inc.php" method="post">
        <button class="logout-btn">LOGOUT</button>
    </form>

</body>

<style>
    .username {
        color: beige;
        text-align: center;
        width: 300px;
    }

    .logout {
        margin-top: 20px;
        border-top: 1px solid tomato;
    }

    .logout-btn {
        margin-top: 10px;
        color: black;
        background: tomato;
    }

    html {
        background: #333333;
        color: tomato;
        font-family: Arial, Helvetica, sans-serif;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 300px;
        height: max-content;
        /* margin-bottom: 20px; */
        /* padding-bottom: 20px; */
    }

    h3 {
        text-align: center;
        width: 300px;
    }

    .signup {
        margin-top: 30px;
    }

    input {
        margin-bottom: .5rem;
        padding: .3rem;
        border-radius: 3px;
        border: none;
    }

    button {
        background: black;
        color: white;
        font-weight: bold;
        padding: .5rem;
        border-radius: 5px;
        border: 1px solid beige;
        width: 120px;
    }

    .error {
        width: 300px;
        color: red;
        text-align: center;
        margin: 0;
    }

    .success {
        width: 300px;
        color: lime;
        text-align: center;
        margin: 0;
    }
</style>

</html>