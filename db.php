<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "lj2ch1";

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){ 
    echo 'connectie error:' . mysqli_connect_error();
  }