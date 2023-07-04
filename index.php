<?php

require_once("./data/db.php");


foreach ($products as $key => $product) {

    echo $product -> getProductInfo($key + 1) . "<br><br>--------------------<br><br>";

}

foreach ($food as $key => $value) {

    echo $value -> getFoodInfo($key + 1) . "<br><br>--------------------<br><br>";

}

foreach ($toys as $key => $toy) {
    
    echo $value -> getToysInfo($key + 1) . "<br><br>--------------------<br><br>";

}