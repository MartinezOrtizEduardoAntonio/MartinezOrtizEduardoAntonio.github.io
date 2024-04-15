<?php 
    include '../../lib/database.php'; 
    $connection = connection_with_database();

    // Verifica si el usuario ha ingresado un nombre de usuario
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        // Realiza la consulta para verificar si existe el usuario
        $query = "SELECT * FROM `users` WHERE username='{$_POST['username']}'";
        $result = mysqli_query($connection, $query) or die("Error al consultar usuario: " . mysqli_error());

        // Verifica si se encontró el usuario
        if ($values = mysqli_fetch_array($result)) {
            // Si el usuario existe, redirige a otra página
            header("Location: otra_pagina.php");
            exit;
        } else {
            // Si el usuario no existe, muestra un mensaje
            $error_message = "Usuario no encontrado";
        }
    } else {
        // Si no se ha ingresado ningún nombre de usuario, muestra un mensaje
        $error_message = "Por favor ingresa un nombre de usuario";
    }
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!-- Incluye Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos adicionales personalizados */
    body {
      height: 100vh;
      background-color: #f8f9fa;
    }
    .container-form {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    form {
      width: 450px;
      padding: 20px;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      background-color: #fff;
    }
  </style>
</head>
<body>
    <div class="container">
        <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger mt-4" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php } ?>
        <br><br>
        <div class="container-form">
      <form action="../../../src/router/web/login.php">
        <h2 class="mb-4">Iniciar sesión</h2>
        <div class="mb-3">
          <label for="username" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
      </form>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>