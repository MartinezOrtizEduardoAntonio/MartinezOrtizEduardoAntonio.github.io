<?php
    require_once '../../../partials/navbar.php';
?>

<?php
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    $connection = connection_with_database();

    // get el user id
    $userId = $_POST['userId'];
    $query="DELETE FROM `users` WHERE `id`='$userId'";
    $result = mysqli_query($connection, $query);

    //we will waching if can update the user 
    echo "<br>";
    if ($result) {
        show_message("The user was delete with success");
    } else {
        show_message_error("The user not can be delete");
    }

    // close the connection
    mysqli_close($connection);
?>

<?php
    require_once '../../../partials/footer.php';
?>
