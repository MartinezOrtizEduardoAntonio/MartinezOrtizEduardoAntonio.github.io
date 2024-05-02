<?php
    function este_usuario_existe($username,$password){
        // vamos a conectarnos con la base de datos
        /*$server="127.0.0.1:3306";
        $username="u280687855_Xeno";
        $password="v[aTd8C:";
        $database="u280687855_examen2";
        
        $connection=mysqli_connect($server,$username,$password,$database) or die("Problemas en la conexion".mysqli_error($conexion));*/
        
        // vamos a conectarnos con la base de datos
        $conexion=mysqli_connect("localhost","root","","bd1") or die("error to connection with the database");

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

    function crear_session($username){
        session_start();

        $_SESSION["username"] = $username;
    }

    function destruir_session(){
        session_start();

        session_unset();

        session_destroy();

        header("Location: ingreso.php");
        exit();
    }

    function crear_cookies($usuario){
        $segundo = 60;
        $minuto = 1;
        $hora = 1;
        $dias = 1;
        $duracion_cookie =  $segundo * $minuto * $hora * $dias;

        setcookie("usuario_recordado", $usuario, time() + $duracion_cookie, "/");
    }

    function destruir_cookies(){
        if(isset($_COOKIE["usuario_recordado"])){
            setcookie("usuario_recordado", "", time() - 3600, "/");
            echo "La cookie fue eliminada exitosamente :D";
        }       
    }
?>
