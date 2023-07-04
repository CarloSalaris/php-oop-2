<?php

class Toy extends Product {

    private $color;

    public function __construct(
            $name, $imgSrc, $price, $category, $type, $weight,
            $color
        ) {

        parent :: __construct($name, $imgSrc, $price, $category, $type, $weight);
        
        $this -> setColor($color);
    }

    public function getColor() {

        return $this -> color;
    }

    public function setColor($color) {
        $this -> color = $color;
    }

    public function getWeight() {

        return $this -> weight;
    }

    public function setWeight($weight) {
        $this -> weight = $weight;
    }

    public function getToysInfo($number) {

        return $this -> getProductInfo($number)
            
            . "<br> Colore: " . $this -> getColor();

    }

}