<?php

class Category {

    private $name;
    private $icon;

    public function __construct($name, $icon) {
        
        $this -> setCategName($name);
        $this -> setIcon($icon);
    }

    public function getCategName() {

        return $this -> name;
    }

    public function setCategName($name) {
        
        if ($name != "Cani" AND $name != "Gatti") {
       
            throw new Exception("Category needs to be 'Cani' or 'Gatti'.");

        }

        $this -> name = $name;
    }

    public function getIcon() {
        
        return $this -> icon;
    }
    
    public function setIcon($icon) {

        $this -> icon = $icon;

    }

}

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

//categories
$dogProds = new Category("Cani", "dog Icon");
$catProds = new Category("Gatti", "cat Icon");


//products
$products = [
    new Product("spazzola", "./img/CatDogBrush.jpg", 4.50, $dogProds, "prodotti"),
    new Product("croccantini", "", 20.35, $catProds, "cibo"),
    new Product("osso", "", 3.90, $dogProds, "giochi")
];

foreach ($products as $key => $value) {

    echo $value -> getProductInfo($key + 1) . "<br><br>--------------------<br><br>";

};

//Estensioni products
$food = [
    new Food("biscotti", "", 4.50, $dogProds, "cibo", "20/01/2024"),
    new Food("croccantini", "", 20.35, $catProds, "cibo", "20/01/2024"),
    new Food("osso", "", 3.90, $dogProds, "cibo", "20/01/2024")
];

foreach ($food as $key => $value) {

    echo $value -> getProductInfo($key + 1) . "<br> Scadenza: " . $value -> getExpireDate() . "<br><br>--------------------<br><br>";

};