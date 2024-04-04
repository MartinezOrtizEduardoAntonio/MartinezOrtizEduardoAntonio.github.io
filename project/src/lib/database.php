<?php
    function connection_with_database() {
        $server = "127.0.0.1:3306"; 
        $username = "u995592926_root"; 
        $password = "ProgWeb2";
        $database = "u995592926_capacitatkocin"; 
 

        // we create the connection
        $conn = new mysqli($server, $username, $password, $database);

        // we will watching if the connection was success
        if ($conn->connect_error) {
            //die("Error de conexión: " . $conn->connect_error);
            return false;
        } else {
            return $conn; // return the connection
        }
    }
?>