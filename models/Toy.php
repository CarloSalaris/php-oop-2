<?php

class Toy extends Product {

    private $color;
    private $weight;

    public function __construct(
            $name, $imgSrc, $price, $category, $type,
            $color, $weight
        ) {

        parent :: __construct($name, $imgSrc, $price, $category, $type);
        
        $this -> setColor($color);
        $this -> setWeight($weight);
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
            
            . "<br> Scadenza: " . $this -> getColor()
            . "<br> Scadenza: " . $this -> getWeight() . " Kg";

    }

}