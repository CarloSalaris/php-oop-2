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


    <!-- CARD-ROW - PRODOTTI -->
    <div class="row my-4">
        
        <!-- Tipo di prodotto -->
        <h2>PRODOTTI</h2>

        <?php foreach ($products as $key => $product) { ?>
        <!-- CARD -->
        <div class="col-xs col-md-4 p-2">
            
            <div class="border">
                <!-- immagine -->
                <div class="img_container">
                    <img src="<?php echo $product -> getImgSrc(); ?>" class="img-fluid" alt="immagine prodotto">
                </div>
                <!-- Info -->
                <div class="p-3 ">
                    <!-- nome prodotto -->
                    <h4><?php echo $product -> getTitle(); ?></h4>
                    <!-- Categoria -->
                    <div>CONSIGLIATO PER: <?php echo $product -> getCategory() -> getIcon(); ?></div>
                    <!-- peso -->
                    <div>PESO: <?php echo $product -> getWeight(); ?> Kg</div>
                    <!-- prezzo -->
                    <div>PREZZO: <?php echo $product -> getPrice(); ?> Euro</div>
                </div>
            </div>

        </div>

        <?php } ?>

    </div>

    <!-- CARD-ROW - GIOCHI -->
    <div class="row  my-4">
        
        <!-- Tipo di prodotto -->
        <h2>GIOCHI</h2>

        <?php foreach ($toys as $key => $toy) { ?>
        <!-- CARD -->
        <div class="col-xs col-md-4 p-2">
            
            <div class="border">
                <!-- immagine -->
                <div class="img_container">
                    <img src="<?php echo $toy -> getImgSrc(); ?>" class="img-fluid" alt="immagine prodotto">
                </div>
                <!-- Info -->
                <div class="p-3 ">
                    <!-- nome prodotto -->
                    <h4><?php echo $toy -> getTitle(); ?></h4>
                    <!-- Categoria -->
                    <div>CONSIGLIATO PER: <?php echo $toy -> getCategory() -> getIcon(); ?></div>
                    <!-- peso -->
                    <div>PESO: <?php echo $toy -> getWeight(); ?> Kg</div>
                    <!-- colore -->
                    <div>COLORE: <?php echo $toy -> getColor(); ?> </div>
                    <!-- prezzo -->
                    <div>PREZZO: <?php echo $toy -> getPrice(); ?> Euro</div>
                </div>
            </div>

        </div>

        <?php } ?>

    </div>

    <!-- CARD-ROW - CIBO -->
    <div class="row  my-4">
        
        <!-- Tipo di prodotto -->
        <h2>CIBO</h2>

        <?php foreach ($food as $key => $value) { ?>
        <!-- CARD -->
        <div class="col-xs col-md-4 p-2">
            
            <div class="border">
                <!-- immagine -->
                <div class="img_container">
                    <img src="<?php echo $value -> getImgSrc(); ?>" class="img-fluid" alt="immagine prodotto">
                </div>
                <!-- Info -->
                <div class="p-3 ">
                    <!-- nome prodotto -->
                    <h4><?php echo $value -> getTitle(); ?></h4>
                    <!-- Categoria -->
                    <div>CONSIGLIATO PER: <?php echo $value -> getCategory() -> getIcon(); ?></div>
                    <!-- data di scadenza -->
                    <div>SCADENZA: <?php echo $value -> getExpireDate(); ?></div>
                    <!-- peso -->
                    <div>PESO: <?php echo $value -> getWeight(); ?> Kg</div>
                    <!-- prezzo -->
                    <div>PREZZO: <?php echo $value -> getPrice(); ?> Euro</div>
                </div>
            </div>

        </div>

        <?php } ?>

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




