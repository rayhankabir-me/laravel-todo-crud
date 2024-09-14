<?php
abstract class Shape {
    abstract public function area_calculation();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area_calculation()
    {
        return 3.1416 * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area_calculation()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle(10);
echo "area of circle is: ". $circle->area_calculation();
echo "<br>";
$rectangle = new Rectangle(5, 10);
echo "area of rectangle is: ".$rectangle->area_calculation();