<?php
    require_once '../../partials/navbar.php';
?>


<div class="container">
    <form action="searchTeacher.php" method="POST">
        <label for="email"><i class="fi fi-br-search"></i> Search a teacher:</label>
        <input type="text" id="email" name="teacher" required placeholder="Teacher">
        <button class="btn-form">Search</button>
    </form>
</div>



<?php
    require_once '../../lib/database.php';
    $conexion = connection_with_database();

    // We will read all the users
    $query = "SELECT t.id, t.id_users, u.username, u.email, u.first_name, u.second_name, u.last_name 
              FROM teacher t
              JOIN users u ON t.id_users = u.id
              WHERE t.status = 1;";

    $result = mysqli_query($conexion, $query); // Ejecutar la consulta y almacenar el resultado

    // This is the start of the table
    echo "
        <div class='container'>
        <table class='table table-striped'>
        <thead>
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
    ";

    // Show all the user in a table
    while ($values = mysqli_fetch_array($result)) {
        echo "
            <tr>
                <td>{$values['username']}</td>
                <td>{$values['first_name']} {$values['second_name']} {$values['last_name']}</td>
                <td>{$values['email']}</td>
            </tr>
        ";
    }

    // Show the
    echo "
        </tbody>
        </table>
        </div>
    ";

    mysqli_close($conexion);
?>


<?php
    require_once '../../partials/footer.php';
?>



