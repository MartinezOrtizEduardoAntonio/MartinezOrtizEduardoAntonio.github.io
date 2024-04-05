<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="INSERT INTO `customer`(`name`, `secon_name`, `last_name`, `email`) VALUES ('$_POST[name]','$_POST[secondName]','$_POST[lastName]','$_POST[email]')";
    mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    mysqli_close($connection);
    echo "the customer was add";
?>