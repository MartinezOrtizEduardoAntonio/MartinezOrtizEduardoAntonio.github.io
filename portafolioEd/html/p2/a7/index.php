<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="SELECT `name`, `secon_name`, `last_name`, `email`, `id` FROM `customer` WHERE id=$_POST[id]";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    if($values=mysqli_fetch_array($result)){
        echo "id ".$values['id']."<br>";
        echo "id ".$values['name']."<br>";
        echo "id ".$values['secon_name']."<br>";
        echo "id ".$values['last_name']."<br>";
        echo "id ".$values['email']."<br>";
    }else{
        echo "this id not exist";
    }
    mysqli_close($connection);
?>