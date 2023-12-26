<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require_once "Classes/Car.php";

    $car01->setBrand("BMW");
    echo $car01->getBrand();

    $car01->setColor("white");
    echo $car01->getColor();

    ?>


</body>

</html>