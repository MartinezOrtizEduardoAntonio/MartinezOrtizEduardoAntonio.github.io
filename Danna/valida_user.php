<?PHP
	require_once("Cookies.php");

	$username=$_POST['username'];
    $password=$_POST['password'];

    if(este_usuario_existe($username, $password)){
        crear_session($username);

        if(isset($_POST["remember"])){
            crear_cookies($username);
        }else{
            destruir_cookies();
        }

        header("Location: Pagina_inicio.php");
    }else{
        echo "El usuario que ingresó no existe :C, inténtelo de nuevo";
    }

    mysqli_close($conexion);
?>