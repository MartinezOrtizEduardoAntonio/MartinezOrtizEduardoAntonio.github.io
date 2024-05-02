<?php
    function este_usuario_existe($username,$password){
        // vamos a conectarnos con la base de datos
        $servidor = "127.0.0.1:3306"; 
        $nombre_usuario = "u995592926_root"; 
        $contraseña = "ProgWeb2";
        $base_de_datos = "u995592926_capacitatkocin"; 
        $conexion = new mysqli($servidor, $nombre_usuario, $contraseña, $base_de_datos);

        // buscar el usuario y la contraseña en la base de datos
        $consulta = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $resultado = mysqli_query($conexion, $consulta) or die ("error en la inserción ".mysqli_error());

        //devolveremos si es verdad o falso
        if($valores = mysqli_fetch_array($resultado)){
            mysqli_close($conexion);
            return true;
        }else{
            mysqli_close($conexion);
            return false;
        }
    }


    //-------------------------------------------------funciones de session
    function crear_session($username){
        //activamos una session en la computadora
        session_start();

        // creamos una variable y guardamos la informacion que queramos
        $_SESSION["username"] = $username;
    }

    function destruir_session(){
        // Iniciar la sesión si no está iniciada
        session_start();

        // Eliminar todas las variables de sesión
        session_unset();

        // Destruir la sesión
        session_destroy();

        // Redirigir al usuario a la página de inicio de sesión (o cualquier otra página)
        header("Location: index.php");
        exit();
    }

    //------------------------------------funciones de cookies 
    function crear_cookies($usuario){
        // establecer la duración de la cookie (60 segundos)
        $segundo = 60;
        $minuto = 1;
        $hora = 1;
        $dias = 1;
        $duracion_cookie =  $segundo * $minuto * $hora * $dias;

        // crear la cookie para recordar al usuario
        setcookie("usuario_recordado", $usuario, time() + $duracion_cookie, "/");
    }

    function destruir_cookies(){
        // verificar si existen las cookies del usuario 
        if (isset($_COOKIE["usuario_recordado"])) {
            // si existen las cookies, destruimos las cookies antiguas
            setcookie("usuario_recordado", "", time() - 3600, "/");
            echo "Cookie eliminada exitosamente.";
        }       
    }
?>
