<?php

class Food extends Product {

    private $expireDate;

    public function __construct(
            $name, $imgSrc, $price, $category, $type, $weight,
            $expireDate
        ) {

        parent :: __construct($name, $imgSrc, $price, $category, $type, $weight);
        
        $this -> setExpireDate($expireDate);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }

    public function setExpireDate($expireDate) {
        $this -> expireDate = $expireDate;
    }

    public function getFoodInfo($number) {

        return $this -> getProductInfo($number)
             . "<br> Scadenza: " . $this -> getExpireDate();

    }

}