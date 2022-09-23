<?php
// connect to database
$conn = mysqli_connect('localhost', 'joran', 'Aramis12321!', 'lj2ch1');
 
// connectie checken
if(!$conn){ 
  echo 'connectie error:' . mysqli_connect_error();
}


// query schrijven voor alle producten
$sql = 'SELECT id, naam, prijs, voorraad FROM producten';

//query maken en resultaat ophalen
$result = mysqli_query($conn, $sql);


//kolom resultaat ophalen als 'array'
$producten = mysqli_fetch_all ($result, MYSQLI_ASSOC);

//connectie afbreken
mysqli_close($conn);