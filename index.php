<?php

require_once("./data/db.php");


foreach ($products as $key => $value) {

    echo $value -> getProductInfo($key + 1) . "<br><br>--------------------<br><br>";

}

foreach ($food as $key => $value) {

    echo $value -> getProductInfo($key + 1) . "<br> Scadenza: " . $value -> getExpireDate() . "<br><br>--------------------<br><br>";

}