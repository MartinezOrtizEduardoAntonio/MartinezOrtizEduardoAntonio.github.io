<?php
    require_once '../../partials/navbar.php';
?>

<?php
    require_once '../../lib/database.php';
    require_once '../../lib/show.php';
    $connection = connection_with_database();

    // query for update the user in the database
    $valueStatus=false;
    if($_POST["status"]=='true' or $_POST["status"]=='1'){
        $valueStatus=true;
    }

    $query = "UPDATE `course` SET 
        `name` = '$_POST[name]',
        `description` = '$_POST[description]',
        `link` = '$_POST[link]',
        `prices` = '$_POST[prices]',
        `status` = '$valueStatus',
        `available_date` = '$_POST[available_date]',
        `available_time` = '$_POST[available_time]'
        WHERE `id` = '$_POST[courseId]'";

    
    $result = mysqli_query($connection, $query);
    //we will waching if can update the user 

    if ($result) {
        show_message('The course was update with success'); //'The course was update with success'
    } else {
        show_message_error("The Course not can be update");
    }

    // close the connection
    mysqli_close($connection);
?>

<?php
    require_once '../../partials/footer.php';
?>
