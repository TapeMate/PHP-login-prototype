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
    // Loops
    // sidenode: add "$" in front of parameters inside of functions -> different to JS
    
    // for Loop
    for ($i = 0; $i <= 10; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }

    // while Loop ends on false statement
    $test = 5;
    while ($test < 10) {
        echo $test;
        $test++;
    }

    // do while Loop ends after false statement
    $test2 = 10;
    do {
        echo $test2;
        $test2++;
    } while ($test2 < 10);

    // for each Loop indexed array
    $fruits = ["Apple", "Banana", "Orange"];
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    // for each Loop assotiated array
    $fruits2 = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"];
    foreach ($fruits2 as $fruit => $color) {
        echo $fruit, $color . "<br>";
    }

    ?>

</body>

<style>
    html {
        background: #333333;
        color: tomato;
    }
</style>

</html>