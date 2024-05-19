<?php
    //Solamente el administrador va a poder dar de alta a usuarios
    require_once '../../lib/database.php';
    require_once '../../lib/show.php';
    require_once '../../partials/navbar.php';
    $conexion = connection_with_database();
    //mysqli_query($conexion,"INSERT INTO `course` (`name`, `description`, `link`, `price`, `status`, `available_date`, `available_time`, `id_teacher`) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[link]', '$_POST[prices]', 'true', '$_POST[available_date]', '$_POST[available_time]', '$_POST[id_teacher]');") or die("Problemas en el select".mysqli_error());
    mysqli_query($conexion,"INSERT INTO `course` (`name`, `description`, `link`, `prices`, `status`, `available_date`, `available_time`) VALUES ('$_POST[name]', '$_POST[description]', '$_POST[link]', '$_POST[prices]', 1, '$_POST[available_date]', '$_POST[available_time]');") or die("Problemas en el select".mysqli_error());
    show_message("The new course was add with success");
    
    
    require_once '../../partials/footer.php';
?>