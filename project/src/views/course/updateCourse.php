<?php
    require_once '../../partials/navbar.php';
?>

<?php
    require_once '../../lib/database.php';
    require_once '../../lib/show.php';
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
    $query = "UPDATE `course` SET 
        `name` = '$_POST[name]',
        `description` = '$_POST[description]',
        `link` = '$_POST[link]',
        `prices` = '$_POST[prices]',
        `status` = '$_POST[status]',
        `available_date` = '$_POST[available_date]',
        `available_time` = '$_POST[available_time]'
        WHERE `id` = '$_POST[id]'";

    
    $result = mysqli_query($connection, $query);

    //we will waching if can update the user 

    if ($result) {
        show_message("The Course was update with success");
    } else {
        show_message_error("The Course not can be update");
    }

    // close the connection
    mysqli_close($connection);
?>

<?php
    require_once '/project/src/partials/footer.php';
?>
