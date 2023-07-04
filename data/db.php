<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");


//categories
$dogProds = new Category("Cani", "dog Icon");
$catProds = new Category("Gatti", "cat Icon");

//products
$products = [
    new Product("spazzola", "./img/CatDogBrush.jpg", 4.50, $dogProds, "prodotti"),
    new Product("croccantini", "", 20.35, $catProds, "cibo"),
    new Product("osso", "", 3.90, $dogProds, "giochi")
];

//Estensioni products
$food = [
    new Food("biscotti", "", 4.50, $dogProds, "cibo", "20/01/2024"),
    new Food("croccantini", "", 20.35, $catProds, "cibo", "20/01/2024"),
    new Food("osso", "", 3.90, $dogProds, "cibo", "20/01/2024")
];

