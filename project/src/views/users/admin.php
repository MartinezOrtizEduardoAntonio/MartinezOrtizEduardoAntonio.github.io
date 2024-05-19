<?php
    require_once '../../partials/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/users/formUser.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    
</head>
<body>
    <div class="container">
        <form action="editUsers/searchUser.php" method="POST">
            <label for="email"><i class="fi fi-br-search"></i> Write a username:</label>
            <input type="text" id="email" name="username" required placeholder="Username">
            <button class="btn-form">Search</button>
        </form>
    </div>
</body>
</html>

<?php
    require_once '../../lib/database.php';
    $conexion = connection_with_database();

    //we will to read all the users 
    $query="SELECT * FROM `users` where `privilege`=3";
    $result = mysqli_query($conexion, $query) or die("Problemas en el select: " . mysqli_error($conexion));

    //this is the start of the table 
    echo "
        <div class='container'>
        <table class='table table-striped'>
        <thead>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>name</th>
            <th>privilege</th>
        </tr>
        </thead>
        <tbody>
    ";

    //we will show all the user in a table 
    while($values=mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>$values[username]</td>
                <td>$values[email]</td>
                <td>$values[first_name] $values[second_name] $values[last_name]</td>
                <td>$values[privilege]</td>
            </tr>
        ";
    }

    //show the 
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
