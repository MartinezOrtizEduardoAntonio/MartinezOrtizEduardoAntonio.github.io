<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);

    $query="UPDATE `customer` SET `name` = '$_POST[name]', `secon_name` = '$_POST[secon_name]', `last_name` = '$_POST[last_name]', `email` = '$_POST[email]' WHERE `customer`.`id` = $_POST[id]";
    mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    mysqli_close($connection);
    echo "Usuario editado";
?>

