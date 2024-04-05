<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="SELECT `Id`,`nombre`,`correo` FROM `personas` WHERE id=$_POST[id]";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    if($values=mysqli_fetch_array($result)){
        echo "id ".$values['Id']."<br>";
        echo "name ".$values['nombre']."<br>";
        echo "correo ".$values['correo']."<br>";
    }else{
        echo "this id not exist";
    }
    mysqli_close($connection);
?>