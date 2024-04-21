<?php
    require_once '../../../lib/database.php';
    $conexion = connection_with_database();

    // Escapar las variables POST para evitar inyección SQL
    $username = $_POST['username'];
    $query="SELECT * FROM `users` WHERE `username`='$username'";
    $result = mysqli_query($conexion, $query) or die("Problemas en el select: " . mysqli_error($conexion));
    mysqli_close($conexion);

    if($values=mysqli_fetch_array($result)){
        echo "
        <!DOCTYPE html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>Insertar Usuario</title>
            <link rel='stylesheet' href='../../../../public/css/users/formUser.css'>
        </head>
        <body>
            <div class='container'>
            <h2>Edit a new user</h2>
            <hr>
            <form action='addUser.php' method='POST'>
                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' required value={$values["email"]}>
                
                <label for='username'>User Name:</label>
                <input type='text' id='username' name='username' required value={$values["username"]}>
        
                <label for='first_name'>Name:</label>
                <input type='text' id='first_name' name='first_name' required value={$values["first_name"]}>
        
                <label for='second_name'>Second Name:</label>
                <input type='text' id='second_name' name='second_name' value={$values["second_name"]}>
        
                <label for='last_name'>Last Name:</label>
                <input type='text' id='last_name' name='last_name' required value={$values["last_name"]}>
        
                <label for='password'>Password:</label>
                <input type='password' id='password' name='password' required value={$values["password"]}>
        
                <label for='birthday'>Birthday:</label>
                <input type='date' id='birthday' name='birthday' required value={$values["birthday"]}>
        
                <label for='privilege'>Privilage:</label>
                <select id='privilege' name='privilege' class='form-select' value={$values["privilege"]}>
                    <option value='1'>user</option>
                    <option value='2'>teacher</option>
                    <option value='3'>admin</option>
                </select>
                <br>
                <button type='submit' class='btn btn-primary'>Update</button>
            </form>
        </div>
        </body>
        ";
    } else {
        // Si no se encontraron resultados, recargar la página anterior
        header("Location: userEdit.html");
        exit(); // Es importante terminar el script después de redirigir
    }
?>