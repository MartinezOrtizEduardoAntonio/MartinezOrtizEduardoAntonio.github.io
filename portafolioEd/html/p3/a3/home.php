<?php
    require_once("funciones.php"); // cargarmos el archivo de funciones
    // Iniciar la sesión para acceder a las variables de sesión
    session_start();

    // Verificar si no existe la variable de sesión "username"
    if (!isset($_SESSION["username"])) {
        // Si la variable de sesión no está definida, redirigir al usuario a la página de inicio de sesión
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados aquí */
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Hola, <?php echo $_SESSION["username"]; ?></h4>
        <p>Bienvenido a la página de inicio. ¡Espero que tengas un gran día!</p>
        <hr>
        <p class="mb-0">
            <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
        </p>
    </div>
</div>

<!-- Bootstrap JS (opcional si no necesitas funcionalidades de Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>