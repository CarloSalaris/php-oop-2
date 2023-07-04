<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");



//categories
$dogProds = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
$catProds = new Category("Gatti", "<i class='fa-solid fa-cat'></i>");

//products
$products = [
    new Product("spazzola", "./img/CatDogBrush.jpg", 4.50, $dogProds, "prodotto", 0.2),
    new Product("cappottino", "img/CatDogBrush.jpg", 20.35, $dogProds, "prodotto", 0.3),
    new Product("osso", "img/CatDogBrush.jpg", 3.90, $catProds, "prodotto", 0.4)
];

//Estensioni products
$food = [
    new Food("biscotti", "img/CatDogBrush.jpg", 4.50, $dogProds, "cibo", 0.3, "20/01/2024"),
    new Food("croccantini", "img/CatDogBrush.jpg", 20.35, $catProds, "cibo", 1, "20/01/2024"),
    new Food("osso", "img/CatDogBrush.jpg", 3.90, $dogProds, "cibo", 0.4, "20/01/2024")
];

$toys = [
    new Toy("palla", "img/CatDogBrush.jpg", 4.50, $dogProds, "gioco", 0.5, "Blu"),
    new Toy("Lorem", "img/CatDogBrush.jpg", 20.35, $catProds, "gioco", 2, "Rosso"),
    new Toy("osso", "img/CatDogBrush.jpg", 3.90, $dogProds, "gioco", 3, "Verde")
];

