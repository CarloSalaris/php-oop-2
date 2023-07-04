<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font-awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>E-commerce</title>

    <?php require_once("data/db.php"); ?>

</head>
<body>
    
<div class="container">
    
    <!-- TITOLO -->
    <h1 class="text-center my-4">AMICI CANI E GATTI</h1>

    <!-- CARD-ROW -->
    <div class="row">

        <!-- CARD -->
        <div class="col col-md-3 p-2 border">
            
            <!-- immagine -->
            <div class="img_container">
                <img src="<?php echo $products[0] -> getImgSrc(); ?>" class="img-fluid" alt="immagine prodotto">
            </div>

            <!-- Info -->
            <div>
                <!-- nome prodotto -->
                <h4><?php echo $products[0] -> getTitle(); ?></h4>
                <!-- Categoria -->
                <div><?php echo $products[0] -> getCategory() -> getIcon(); ?></div>
                <!-- peso -->
                <div><?php echo $products[0] -> getWeight(); ?> Kg</div>
                <!-- prezzo -->
                <div><?php echo $products[0] -> getPrice(); ?> Euro</div>
            </div>

        </div>

    </div>


</div>




<!-- /* echo "<h1>PRODOTTI</h1><br><br>";
foreach ($products as $key => $product) {

    echo $product -> getProductInfo($key + 1) . "<br><br>--------------------<br><br>";

}

echo "<h1>CIBO</h1><br><br>";
foreach ($food as $key => $value) {

    echo $value -> getFoodInfo($key + 1) . "<br><br>--------------------<br><br>";

}

echo "<h1>GIOCHI</h1><br><br>";
foreach ($toys as $key => $toy) {
        
    echo $toy -> getToysInfo($key + 1) . "<br><br>--------------------<br><br>";

} */ -->


</body>
</html>




