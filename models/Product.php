<?php

class Product {

    private $name;
    private $imgSrc;
    private $price;
    private $type;
    
    private Category $category;

    public function __construct($name, $imgSrc, $price, Category $category, $type) {

        $this -> setName($name);
        $this -> setImgSrc($imgSrc);
        $this -> setPrice($price);
        $this -> setType($type);

        $this -> setCategory($category);

    }

    public function getProductInfo($number) {

        return "PRODOTTO $number: <br>"
        . "<br> Titolo: " . $this -> getTitle()
        . "<br> Immagine: " . $this -> getImgSrc()
        . "<br> Prezzo: " . $this -> getPrice() . " Euro"
        . "<br> Categoria: " . $this -> getCategory() -> getCategName()
        . "<br> Icona: " . $this -> getCategory() -> getIcon()
        . "<br> Tipo: " . $this -> getType();

    }

    public function getTitle() {
        return $this -> title;
    }
    public function setName($name) {
        $this -> title = $name;
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
