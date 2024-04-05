<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);

    $query="SELECT * FROM `personas` WHERE Id>=0 and Id<=50";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    while($values=mysqli_fetch_array($result)){
        echo "id ".$values['Id']."<br>";
        echo "name ".$values['nombre']."<br>";
        echo "correo ".$values['correo']."<br>";
    }
    mysqli_close($connection);
?>