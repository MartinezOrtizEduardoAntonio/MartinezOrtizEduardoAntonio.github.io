<?php
    include('header.php'); // Incluye el archivo header.php
    $user=$_POST['user'];
    $password=$_POST['password'];

    //we will connection with the database
    $server = "127.0.0.1:3306"; 
    $username = "u995592926_ejercicios_web"; 
    $password = "ProgWeb2";
    $database = "u995592926_ejercicios_web"; 
    $connection = new mysqli($server, $username, $password, $database);
    $query="INSERT INTO `customer`(`name`, `secon_name`, `last_name`, `email`) VALUES ('$_POST[name]','$_POST[secondName]','$_POST[lastName]','$_POST[email]')";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());


    session_start();
    $_SESSION["authentication"]="true";
?>