<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = '6LcFheApAAAAAKz5w-Igke57IskTmNErdb-pCysu';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verificar la respuesta de reCAPTCHA
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"]) !== 1) {
        // reCAPTCHA falló
        echo "<center><h1>No eres humano 🤖</h1></center>";
    } else {
        // reCAPTCHA fue exitoso
        // Obtener datos del formulario
        $username = $_POST['username'];
        $firstName = $_POST['firstName'];
        $lastNameFather = $_POST['lastNameFather'];
        $lastNameMother = $_POST['lastNameMother'];
        $email = $_POST['email'];
        $password = $_POST['password']; // No se debe almacenar en texto plano
        $estado = 'Activo'; // Puedes cambiar este valor según tu lógica

        // Conectar a la base de datos
        $server = "127.0.0.1:3306"; 
        $db_username = "u995592926_ejercicios_web"; 
        $db_password = "ProgWeb2";
        $database = "u995592926_ejercicios_web"; 
        $connection = new mysqli($server, $db_username, $db_password, $database);

        // Verificar la conexión
        if ($connection->connect_error) {
            die("Conexión fallida: " . $connection->connect_error);
        }

        // Preparar la consulta SQL 
        $stmt = $connection->prepare("INSERT INTO clientes (nombre, ap, am, email, usuario, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastNameFather, $lastNameMother, $email, $username, $password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<center><h1>Formulario enviado y datos guardados correctamente 😊</h1></center>";
        } else {
            echo "<center><h1>Ocurrio un error al enviar el formulario 🤨</h1></center>";
        }

        // Cerrar la conexión
        $stmt->close();
        $connection->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Usuarios Registrados</h1>
        <?php
        // Conectar a la base de datos
        $server = "127.0.0.1:3306"; 
        $db_username = "u995592926_ejercicios_web"; 
        $db_password = "ProgWeb2";
        $database = "u995592926_ejercicios_web"; 
        $connection = new mysqli($server, $db_username, $db_password, $database);

        // Verificar la conexión
        if ($connection->connect_error) {
            die("Conexión fallida: " . $connection->connect_error);
        }

        // Consultar los usuarios registrados
        $sql = "SELECT id, nombre, ap, am, email, usuario FROM clientes";
        $result = $connection->query($sql);

        // Mostrar los resultados en una tabla HTML
        if ($result->num_rows > 0) {
            echo "<table class='table table-striped table-hover mt-4'>";
            echo "<thead class='table-dark'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Apellido Paterno</th>";
            echo "<th>Apellido Materno</th>";
            echo "<th>Email</th>";
            echo "<th>Usuario</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ap']) . "</td>";
                echo "<td>" . htmlspecialchars($row['am']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['usuario']) . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<div class='alert alert-warning mt-4' role='alert'>No hay usuarios registrados.</div>";
        }

        // Cerrar la conexión
        $connection->close();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
