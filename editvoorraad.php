<?php


$voorraad = $_POST['voorraad'];


$sql = "SELECT * FROM 'producten'";
$all_products = mysqli_query($con,$sql)
if(isset($_POST['submit'])) {

    $naam = mysqli_real_escape_string($_POST['naam']);

    $id = mysqli_real_escape_string ($_POST['id']);

    $sql_insert =
        "INSERT INTO `product`(`naam`, `id`)
            VALUES ('$naam','$id')";

}
?>
