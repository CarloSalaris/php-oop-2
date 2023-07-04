<?php

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");



//categories
$dogProds = new Category("Cani", "dog Icon");
$catProds = new Category("Gatti", "cat Icon");

//products
$products = [
    new Product("spazzola", "./img/CatDogBrush.jpg", 4.50, $dogProds, "prodotto"),
    new Product("croccantini", "", 20.35, $catProds, "prodotto"),
    new Product("osso", "", 3.90, $dogProds, "prodotto"),
    new Toy("biscotti", "", 4.50, $dogProds, "gioco", "Blu", 1),
    new Toy("croccantini", "", 20.35, $catProds, "gioco", "Rosso", 2),
    new Toy("osso", "", 3.90, $dogProds, "gioco", "Verde", 3)
];

//Estensioni products
$food = [
    new Food("biscotti", "", 4.50, $dogProds, "cibo", "20/01/2024"),
    new Food("croccantini", "", 20.35, $catProds, "cibo", "20/01/2024"),
    new Food("osso", "", 3.90, $dogProds, "cibo", "20/01/2024")
];

$toys = [
    new Toy("biscotti", "", 4.50, $dogProds, "gioco", "Blu", 1),
    new Toy("croccantini", "", 20.35, $catProds, "gioco", "Rosso", 2),
    new Toy("osso", "", 3.90, $dogProds, "gioco", "Verde", 3)
];

