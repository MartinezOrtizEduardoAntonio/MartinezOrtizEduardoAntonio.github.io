<?php
    //Solamente el administrador va a poder dar de alta a usuarios
    require_once '../../../lib/database.php';
    $conexion = connection_with_database();
    mysqli_query($conexion,"INSERT INTO `users` (`email`, `username`, `first_name`, `second_name`, `last_name`, `password`, `birthday`, `privilege`, `active`) VALUES ('$_POST[email]', '$_POST[username]', '$_POST[first_name]', '$_POST[second_name]', '$_POST[last_name]', '$_POST[password]', '$_POST[birthday]', '$_POST[privilege]', 'true');") or die("Problemas en el select".mysqli_error());
    echo "user add";
?>