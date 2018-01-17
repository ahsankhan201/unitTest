<?php
//namespace Products\Circle;
require_once 'shape.php';
// circle class
class Circle implements Shape {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

// calcArea calculates the area of circles 
    public function calcArea() {
        return $this->radius * $this->radius * pi();
    }

}

