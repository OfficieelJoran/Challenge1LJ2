<?php
include 'db.php';
$naam = $_POST['naam'];
$prijs = $_POST['prijs'];
$voorraad = $_POST['voorraad'];

mysqli_query($conn, "INSERT INTO producten (naam, prijs, voorraad) VALUES ('$naam', '$prijs', '$voorraad')");

?>
