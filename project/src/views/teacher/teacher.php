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
    $connection = connection_with_database();

    $query = "SELECT * FROM `users` WHERE `privilege` = '2'";

    $result = mysqli_query($connection, $query) or die("Error en la consulta: " . mysqli_error($connection));

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

    while ($user = mysqli_fetch_array($result)) {
        echo "
            <tr>
                <td>{$user['username']}</td>
                <td>{$user['first_name']} {$user['second_name']} {$user['last_name']}</td>
                <td>{$user['email']}</td>
            </tr>
        ";
    }

    echo "
                </tbody>
            </table>
        </div>
    ";

    mysqli_close($connection);
?>


<?php
    require_once '../../partials/footer.php';
?>



