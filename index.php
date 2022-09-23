<?php

include 'db.php';

include_once 'exportproducts.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="LJ2CH1style.css">
</head>

<header>
    <a href="addstuff.php" class="addstuff"> Add/Edit stuff </a>
    <p>Producten</p>
</header>

<body>
<iframe name="hiddenFrame2" class="hide"></iframe>
    <div class="products">

    <?php
    foreach($producten as $products): ?>
    <div class="productvak">
        <img src='' class='picca'> </img>
        <p1><?= $products['naam']; ?></p1><br>
        <p2>€<?= $products['prijs']; ?></p2><br><br><br><br><br><br><br><br>
        <p3>Voorraad:<?= $products['voorraad']; ?></p3>
        <a href="removeproduct.php?id=<?= $products['id']?>"><img class="delete" src="images/trash.png" ></a>
        <input type="submit" class="bestel" value="Toevoegen aan Winkelmandje">
    </div>
        <?php endforeach; ?>
    </div>

    
    <div class="winkelmand"> <p>Winkelmand</p>
        <div class="winkelmandproducten">

        </div>

        <button class="afrekenen">Afrekenen</button>
    </div>
</body>
</html>