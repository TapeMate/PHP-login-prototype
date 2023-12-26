<?php
// example class
class Car
{
    // PROPERTIES / FIELDS
    private $brand;
    private $color;

    // CONSTRUCTOR
    // passed params are not the same like the props, just placeholders
    public function __construct($brand, $color = "none")
    {
        // actuall assignment to the parameter
        // brand without $ is the actuall prop
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & Setter Methods
    public function getBrand()
    {
        return $this->brand;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function setColor($color)
    {
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

    // METHODS
    // use assigned props in method with $this->propName
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}

$car01 = new Car("Volvo", "green");
