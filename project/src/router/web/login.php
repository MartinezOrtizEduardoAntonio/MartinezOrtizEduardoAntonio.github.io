<?php 
    include '../../lib/database.php'; 
    $connection = connection_with_database();
    session_start(); //activate the session 
    // 
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        // we will waching if exist this username and password 
        $query = "SELECT * FROM `users` WHERE username='{$_POST['username']}' and password='{$_POST['password']}'";
        $result = mysqli_query($connection, $query) or die("Error al consultar usuario: " . mysqli_error());

        // if we will looking if find the user
        if ($values = mysqli_fetch_array($result)) {
          //we will waching if the user is active 
          if($values['active']){
            // if the user exist, save the variables that we need
            $_SESSION['username'] = $values['username']; //get the username 
            $_SESSION['user_id'] = $values['id']; // get the id of the user
            $_SESSION['privilege'] = $values['privilege']; // save the privilege of the user

            //redirect to other web
            header("Location: ../../views/users/dashboard.php");
            exit;
          }else{
            //create a message for show that the user not is activate 
            $error_message = "This user not is active";
          }
        } else {
            // if the user not was find, we show a message of error
            $error_message = "User not find";
        }
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
        <form action="login.php" method="POST" onsubmit="return validateForm()">
          <h2 class="mb-4">Iniciar sesión</h2>
          <div class="mb-3">
              <label for="username" class="form-label">Nombre de usuario</label>
              <input type="text" class="form-control" id="username" name="username" required pattern="[a-zA-Z0-9]+" title="Por favor, ingresa solo letras y números">
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

<script>
  function validateForm() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Verifica que el username no contenga caracteres especiales
      /*
      if (!/^[a-zA-Z0-9]+$/.test(username)) {
          alert('El nombre de usuario solo puede contener letras y números.');
          return false;
      }

      // Verifica que no haya caracteres especiales en la contraseña
      if (/[^a-zA-Z0-9]/.test(password)) {
          alert('La contraseña no puede contener caracteres especiales.');
          return false;
      }
      */
      return true;
  }
</script>