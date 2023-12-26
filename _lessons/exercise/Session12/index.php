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

    $test3 = "Daniel";

    function sayHello(string $name)
    {
        return "Hello " . $name . "!";
    }

    $test = sayHello("Daniel");
    echo $test;

    // second function
    function calculator(int $num01, int $num02)
    {
        $result = $num01 + $num02;
        return $result;
    }

    $test2 = calculator(2, 5);
    echo $test2;

    // take global scoped variable inside function
    function testFunction(string $name)
    {
        global $test3;
        return $test3;
    }

    echo $test3;

    ?>

</body>

</html>