<?php
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    require_once '../../../partials/navbar.php';
    session_start(); //activar la sesión 

    $connection = connection_with_database();
    $buyDate = new DateTime();
    $formattedDate = $buyDate->format('Y-m-d H:i:s'); // Formatear la fecha en el formato aceptado por MySQL
    $result = mysqli_query($connection, "INSERT INTO `my_course` (`id_users`, `id_course`, `buy_date`) VALUES ('{$_SESSION['user_id']}', '{$_POST['course_id']}', '$formattedDate')") or die("Problemas en el insert: " . mysqli_error($connection));
    if ($result) {
        show_message("The course was added successfully to your library 😊");
    } else {
        show_message_error("The user could not be updated");
    }
    require_once '../../../partials/footer.php';
?>
