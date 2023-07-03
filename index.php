<?php

class Product {

    private $title;
    private $imgSrc;
    private $price;
    private $type;
    private $category;

    public function __construct($title, $imgSrc, $price, $category, $type) {

        $this -> setTitle($title);
        $this -> setImgSrc($imgSrc);
        $this -> setPrice($price);
        $this -> setCategory($category);
        $this -> setType($type);

    }

    public function getProductInfo() {

        return "PRODOTTO 1: <br>"
        . "<br> Titolo: " . $this -> getTitle()
        . "<br> Immagine: " . $this -> getImgSrc()
        . "<br> Prezzo: " . $this -> getPrice() . " Euro"
        . "<br> Categoria: " . $this -> getCategory()
        . "<br> Type: " . $this -> getType();

    }

    public function getTitle() {
        return $this -> title;
    }
    public function setTitle($title) {
        $this -> title = $title;
    }

    public function getImgSrc() {
        return $this -> imgSrc;
    }
    public function setImgSrc($imgSrc) {
        $this -> imgSrc = $imgSrc;
    }

    public function getPrice() {
        return $this -> price;
    }
    public function setPrice($price) {
        $this -> price = $price;
    }

    public function getCategory() {
        return $this -> category;
    }
    public function setCategory($category) {
        $this -> category = $category;
    }

    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }

}

$product1 = new Product("spazzola", "./img/CatDogBrush.jpg", 4.50, "Cani", "prodotto");

echo $product1 -> getProductInfo();