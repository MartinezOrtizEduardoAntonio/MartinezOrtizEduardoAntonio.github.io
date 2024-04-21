<?php
    require_once '../../lib/database.php';
    $conexion = connection_with_database();

    // Escapar las variables POST para evitar inyección SQL
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conexion, $query) or die("Problemas en el select: " . mysqli_error($conexion));
    mysqli_close($conexion);

    if (mysqli_num_rows($result) > 0) {
        // Redirigir al usuario a la página de inicio
        header("Location: login.html");
        exit(); // Es importante terminar el script después de redirigir
    } else {
        // Si no se encontraron resultados, recargar la página anterior
        header("Location: login.html");
        exit(); // Es importante terminar el script después de redirigir
    }

    header("Location: login.html");
?>