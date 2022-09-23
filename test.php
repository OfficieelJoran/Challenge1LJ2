<?php 
include 'db.php';
$naam = $_POST['naam'];
$voorraad = $_POST['voorraad'];
$id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
    <?php
    if($conn === false){
        die("error: could not connect" . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM producten";
    if($result = mysqli_query($conn, $sql)) {
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                echo "<option value='$naam'>$naam<br></option>";
            }
        }
    }

    ?>
 </select>
 



</body>
</html>

<!-- $naam = $_POST['naam'];
 $producten = array ('$naam');
 echo "<select>";
 foreach($producten as $product) {
    echo "<option value='$product'>$product</option>";
 echo $product; 
}
 echo "</select>" -->

 </option>
    </select>

