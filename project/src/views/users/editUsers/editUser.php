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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit a new user</h2>
        <hr>
        <form action="editUserForm.php" method="POST">
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
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" class="btn btn-danger" onclick="delete_user()">Delete</button>
        </form>
    </div>
</body>
</html>
<script>
    function delete_user(id_user){
        if(await show_question('Delete User','Do you would like delete this user?')){

        }
    }
</script>
<?php
    require_once '/project/src/partials/footer.php';
?>
