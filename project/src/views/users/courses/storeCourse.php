<?php
    //Solamente el administrador va a poder dar de alta a usuarios
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    require_once '../../../partials/navbar.php';
    session_start(); //activate the session 


    $connection = connection_with_database();
    $query = "SELECT * FROM course 
    WHERE id NOT IN (SELECT id_course FROM my_course WHERE id_users='{$_SESSION['user_id']}')";
    $result = mysqli_query($connection, $query) or die("Error al consultar usuario: " . mysqli_error());
?>

<div class="container">
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th></th>
                <th>prices</th>
                <th>Activate</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                //we will show all the user course in a table 
                while($values = mysqli_fetch_array($result)){
                    $status = $values['status'] == 1 ? "true" : "false";

                    echo "
                        <tr>
                            <td>{$values['name']}</td>
                            <td>{$values['description']}</td>
                            <td>
                                <video width='100%' height='auto' controls>
                                    <source src='{$values['link']}' type='video/mp4'>
                                </video>
                            </td>
                            <td>{$values['prices']}</td>
                            <td>{$status}</td>
                            <form action='buyCourse.php' method='POST'>
                            <input type='hidden' value={$values['id']} disabled name='course_id'>
                            <td><button class='btn btn-success'>$ Buy</button></td>
                            </form>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>


<?php
    require_once '../../../partials/footer.php';
?>