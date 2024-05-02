<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href=".css">
</head>
<body>
    <h1>Login</h1>
    <form name="admon" method="POST" action="valida_user.php">
        <td><label for='nombre'>Usuario:</label><br>
        <input type="text" name="username" value="<?php echo isset($_COOKIE['usuario_recordado']) ? $_COOKIE['usuario_recordado'] : ''; ?>"><br></td>
        
        <td><label for='nombre'>Contraseña:</label><br>
        <input type="password" name="password" value=""><br></td>

        <td><label><input type="checkbox" name="remember"/>Acepta las cookies</label><br/></td>
        
        <td><input type="submit" value="Ingresar"><br></td>
    </form>
</body>
</html>
