<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="SELECT `name`, `secon_name`, `last_name`, `email`, `id` FROM `customer` WHERE last_name='$_POST[last_name]'";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    while($values=mysqli_fetch_array($result)){
        echo "id ".$values['id']."<br>";
        echo "id ".$values['name']."<br>";
        echo "id ".$values['secon_name']."<br>";
        echo "id ".$values['last_name']."<br>";
        echo "id ".$values['email']."<br>";
    }
    mysqli_close($connection);
?>