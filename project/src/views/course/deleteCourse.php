<?php
    require_once '../../partials/navbar.php';
?>

<?php
    require_once '../../lib/database.php';
    require_once '../../lib/show.php';
    $connection = connection_with_database();

    // get el user id
    $id = $_POST['courseId'];
    $query="DELETE FROM `course` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);

    //we will waching if can update the user 
    echo "<br>";
    if ($result) {
        show_message("The Course was delete with success");
    } else {
        show_message_error("The Course not can be delete");
    }

    // close the connection
    mysqli_close($connection);
?>

<?php
    require_once '../../partials/footer.php';
?>
