<?php

include 'db.php';

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addstuff</title>
    <link rel="stylesheet" href="LJ2CH1style.css">
</head>

<a href="index.php"> back </a>
<body>
<iframe name="hiddenFrame" class="hide"></iframe>
<form action="insertproduct.php" method="POST" target="hiddenFrame">

    <div>
        <br>
        <input type="text" name="naam" placeholder="Naam Product">
    </div> 

<br> 

    <div>
        <br>
        <input type="number" name="prijs" placeholder="Prijs" step="0.01"> 
    </div>
    
<br> 

    <div>
        <br>
        <input type="number" name="voorraad" placeholder="Voorraad">
    </div>



    <input type="submit"> Product toevoegen </button>
</form>

<form method="POST" target="hiddenFrame">


<select id="naam" name="naam">
<?php

while ($naam = mysqli_fetch_array(
                        $all_products,MYSQLI_ASSOC)):;
                        ?>
    <option value="<?php echo $id["id"];
    ?>">
    <?php echo $naam["naam"]; ?>
    </option>
    <?php
                endwhile;
                
    ?>

</form>


</body>
</html>