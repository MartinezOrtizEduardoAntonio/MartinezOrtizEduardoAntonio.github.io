<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="INSERT INTO `productos`(`folio`, `nombre`, `existencia`, `precio`, `costo`) VALUES ('$_POST[folio]','$_POST[name]','$_POST[amount]','$_POST[price]','$_POST[cost]')";
    mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    mysqli_close($connection);
    echo "the products was add";
?>