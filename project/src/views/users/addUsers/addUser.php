<?php
    require_once '../../../partials/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Insertar Usuario</title>
    <link rel="stylesheet" href="../../../../public/css/users/formUser.css">
</head>
<body>
    <div class="container">
        <h2>Add a new user</h2>
        <hr>
        <form action="addUserForm.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="first_name">Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="second_name">Second Name:</label>
            <input type="text" id="second_name" name="second_name">

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>

            <label for="privilege">Privilage:</label>
            <select id="privilege" name="privilege" class="form-select">
                <option value="1">user</option>
                <option value="2">teacher</option>
                <option value="3">admin</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
<?php
    require_once '../../../partials/footer.php';
?>
