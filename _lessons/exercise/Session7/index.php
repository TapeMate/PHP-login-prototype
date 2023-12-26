<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // same story as in javascript
    // String operator
    
    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;
    echo $c;

    // Arithmetic operator
    // +, -, *, /, %, **
    
    echo 1 + 2;

    // Assignment operator
    
    $a = 2;
    $a += 4; // equals to: $a = $a +4
    echo $a;

    // Comparison operator
    
    $a = 2;
    $b = "2";

    if ($a == $b) {
        echo "This statement is true.";
    }

    ?>

</body>

</html>