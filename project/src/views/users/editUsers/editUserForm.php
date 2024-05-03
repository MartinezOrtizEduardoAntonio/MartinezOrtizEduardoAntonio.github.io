<?php
    require_once '../../../partials/navbar.php';
?>

<?php
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    $connection = connection_with_database();

    // data of the form
    $email = $_POST['email'];
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $privilege = $_POST['privilege'];

    // query for update the user in the database
    $query = "UPDATE `users` SET 
                `username` = '$username',
                `first_name` = '$first_name',
                `second_name` = '$second_name',
                `last_name` = '$last_name',
                `password` = '$password',
                `birthday` = '$birthday',
                `privilege` = '$privilege'
                WHERE `email` = '$email'";
    
    $result = mysqli_query($connection, $query);

    //we will waching if can update the user 
    echo "<br>";
    if ($result) {
        show_message("user update with success");
    } else {
        show_message_error("The user not can be update");
    }

    // close the connection
    mysqli_close($connection);
?>

<?php
    require_once '/project/src/partials/footer.php';
?>
