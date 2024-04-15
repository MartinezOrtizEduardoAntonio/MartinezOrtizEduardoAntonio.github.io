<?php
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);

    $query="SELECT * FROM `customer`";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    while($values=mysqli_fetch_array($result)){
        echo "id ".$values['id']."<br>";
        echo "name ".$values['name']."<br>";
        echo "second name ".$values['secon_name']."<br>";
        echo "last name ".$values['last_name']."<br>";
        echo "email ".$values['email']."<br>";
        echo "<br>";
    }
    mysqli_close($connection);
?>