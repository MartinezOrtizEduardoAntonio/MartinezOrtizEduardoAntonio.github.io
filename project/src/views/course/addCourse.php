<?php
    require_once '../../partials/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Insertar Usuario</title>
    <link rel="stylesheet" href="../../../public/css/users/formUser.css">
</head>
<body>
    <div class="container">
        <h2>Add a new course</h2>
        <hr>
        <form action="addCourseForm.php" method="POST">
            <label for="username">Name:</label>
            <input type="text" id="username" name="name" required placeholder="Name">

            <label for="first_name">Description:</label>
            <textarea type="text" id="first_name" name="description" placeholder="Description"></textarea>

            <label for="second_name">Link:</label>
            <input type="text" id="second_name" name="link" placeholder="link">

            <label for="last_name">Price:</label>
            <input type="text" id="last_name" name="price" required placeholder="price">

            <label for="birthday">Available Date:</label>
            <input type="date" id="birthday" name="available_date" required>

            <label for="birthday">Available time:</label>
            <input type="time" id="birthday" name="available_time" required>

            <br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
<?php
    require_once '../../partials/footer.php';
?>