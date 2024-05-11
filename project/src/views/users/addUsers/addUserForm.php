<?php
    //Solamente el administrador va a poder dar de alta a usuarios
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    require_once '../../../partials/navbar.php';
    $conexion = connection_with_database();
    mysqli_query($conexion,"INSERT INTO `users` (`email`, `username`, `first_name`, `second_name`, `last_name`, `password`, `birthday`, `privilege`, `active`) VALUES ('$_POST[email]', '$_POST[username]', '$_POST[first_name]', '$_POST[second_name]', '$_POST[last_name]', '$_POST[password]', '$_POST[birthday]', '$_POST[privilege]', '1');") or die("Problemas en el select".mysqli_error());
    show_message("The  user was add with success");
    require_once '../../../partials/footer.php';
?>