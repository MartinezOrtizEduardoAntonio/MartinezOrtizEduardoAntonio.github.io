<?php 
    include '../../lib/database.php'; 
    $connection = connection_with_database();
    if(isset($_POST['submit'])){
      $nombre=$_POST['username'];
      $contraseña=$_POST['password1'];
      $ip=$_SERVER['REMOTE_ADDR'];
      $captcha=$_POST['g-recaptcha-response'];
      $secretkey="6LcfENopAAAAAAd7I_W88hy3rbleMSJxuU3TFAch";
      if($_POST['password1']==$_POST['password2']){
        $respuesta=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha");
        $atributos=json_decode($respuesta,true);
        if($atributos['success']){
          header("Location:../../../web/project.html");
          exit;
        }else(){
          $error_message="Wrong Captcha";
        }
      }else(){
        $error_message="Wrong passwords";
      }
    }
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo usuario</title>
  <!-- Incluye Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos adicionales personalizados */
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f8f9fa;
    }
    form {
      width: 450px;
      padding: 20px;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      background-color: #fff;
    }
  </style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <form action="sign_up.php" method="post">
    <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger mt-4" role="alert">
          <?php echo $error_message; ?>
        </div>
    <?php } ?>
    <br><br>
    <h2 class="mb-4">Nuevo usuario</h2>
    <div class="mb-3">
      <label for="username" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="username" name="username" required pattern="[a-zA-Z0-0]+">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="password1" name="password1" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Repetir contraseña</label>
        <input type="password" class="form-control" id="password2" name="password2" required>
    </div>
    <div class="mb-3">
        <div class="g-recaptcha" data-sitekey="6LcfENopAAAAAEwEBWG0xIKxBDhGqa7Fr-ZW6-n6"></div>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<script>
  function validateForm() {
      var username = document.getElementById('username').value;
      var password1 = document.getElementById('password1').value;
      var password2 = document.getElementById('password2').value;

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
