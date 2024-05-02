<?php
    require_once("Cookies.php"); // cargarmos el archivo de funciones
    // Iniciar la sesión para acceder a las variables de sesión
    session_start();

    // Verificar si no existe la variable de sesión "username"
    if (!isset($_SESSION["username"])) {
        // Si la variable de sesión no está definida, redirigir al usuario a la página de inicio de sesión
        header("Location: ingreso.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>

<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Hola usuario<?php echo $_SESSION["username"]; ?></h4>
        <p>Bienvenid@ a la página de inicio :D</p>
        <hr>
        <p class="mb-0">
            <a href="logoff.php" class="btn btn-danger">Cerrar sesión</a>
        </p>
    </div>
</div>
</body>
</html>