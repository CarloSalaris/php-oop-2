<?php

class Food extends Product {

    private $expireDate;

    public function __construct(
            $name, $imgSrc, $price, $category, $type,
            $expireDate
        ) {

        parent :: __construct($name, $imgSrc, $price, $category, $type);
        
        $this -> setExpireDate($expireDate);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }

    public function setExpireDate($expireDate) {
        $this -> expireDate = $expireDate;
    }

}