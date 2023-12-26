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

    <?php
    // variable that can be overwritten
    // $name = "Daniel";
    // $name = "Basse";
    // echo $name;
    
    // defining a constant -> always constant as upper case
    // declair constants on top of your script for better overview
    // equivalent to const and let in JS
    define("PI", 3.14);
    define("NAME", "Daniel");
    // define("IS_ADMIN", true);
    
    echo PI;
    echo NAME;
    // echo IS_ADMIN;
    
    // scope of constants is global
    function test()
    {
        echo PI;
    }

    test();

    ?>

</body>

<style>
    html {
        background: #333333;
        color: tomato;
    }
</style>

</html>