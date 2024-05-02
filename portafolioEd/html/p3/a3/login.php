<?php
    require_once("funciones.php"); // cargarmos el archivo de funcion

    //obtenemos el usuario y la password que ingreso el usuario 
    $username=$_POST['username'];
    $password=$_POST['password'];

    // vamos a verificar si existe este usuario en la base de datos 
    if(este_usuario_existe($username, $password)) {

        // si existe un usuario en la base de datos, vamos a crear una sesión y cookies
        crear_session($username);

        // si la casilla "Recordarme" está activada, vamos a crear la cookie
        if (isset($_POST["remember"])) {
            crear_cookies($username);
        } else {
            //de lo contrario las destruimos (esto es opcional)
            destruir_cookies();
        }

        // redirigir al usuario a la pestaña de inicio
        header("Location: home.php");
    } else {
        echo "este usuario no existe";
    }

    mysqli_close($conexion);
?>
