<?php
    // Incluye el archivo database.php
    require_once '../../../lib/database.php';

    // Llama a la función connection_with_database()
    $conexion = connection_with_database();

    // Verifica si la conexión fue exitosa
    if ($conexion) {
        echo "Conexión exitosa a la base de datos.";
        // Aquí puedes realizar las consultas o operaciones que necesites con la base de datos
    } else {
        echo "Error al conectar a la base de datos.";
    }
    //
    //$nombre = $_POST["nombre"];
    //$correo = $_POST["correo"];
?>