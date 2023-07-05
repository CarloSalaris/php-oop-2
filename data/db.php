<?php

require_once("./traits/Weightable.php");

require_once("./models/Category.php");
require_once("./models/Product.php");
require_once("./models/Food.php");
require_once("./models/Toy.php");




//categories
$dogProds = new Category("Cani", "<i class='fa-solid fa-dog'></i>");
$catProds = new Category("Gatti", "<i class='fa-solid fa-cat'></i>");

try {
   
//products
$products = [
    new Product("spazzola", "./img/CatDogBrush.jpg", 4.49, $catProds, "prodotto", 0.2),
    new Product("cappottino", "img/cappottinoDog.webp", 20.35, $dogProds, "prodotto", 0.3),
    new Product("secchetti igienici", "img/sacchettiDog.png", 2.25, $dogProds, "prodotto", 0.4)
];

//Estensioni products
$food = [
    new Food("biscotti", "img/biscrokDog.jpg", 4.50, $dogProds, "cibo", 0.5, "20/01/2024"),
    new Food("croccantini", "img/whiskasCat.jpg", 20.35, $catProds, "cibo", 7, "20/01/2024"),
    new Food("osso di bufalo Large", "img/ossoBufaloDogLarge.webp", 4.99, $dogProds, "cibo", 0.2, "20/01/2024")
];

$toys = [
    new Toy("spiky ball", "img/spikyBall.jpg", 4.99, $dogProds, "gioco", 0.5, "verde"),
    new Toy("cappellino con pesce", "img/CatHat.jpg", 4.17, $catProds, "gioco", 0.2, "grigio"),
    new Toy("broccolo peluche", "img/broccoliCat.jpg", 3.90, $catProds, "gioco", 0.2, "verde")
];


} catch (Exception $e) {
   echo "<h2>Errore nel caricamento prodotto:" . $e -> getMessage() . "</h2>";
}
