<?php
    require_once '../../partials/navbar.php';
?>

<div class="container">
    <form action="searchCourse.php" method="POST">
        <label for="email"><i class="fi fi-br-search"></i> Write a course:</label>
        <input type="text" id="email" name="course" required placeholder="course">
        <button class="btn-form">Search</button>
    </form>
</div>

<?php
    require_once '../../lib/database.php';
    $connection = connection_with_database();
    //we will to read all the users 
    $query="
    SELECT *
    FROM 
        `course` WHERE status=1;
    ";
    
    $result = mysqli_query($connection, $query) or die("Problemas en el select: " . mysqli_error($connection));
    
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
            </tr>
        </thead>
        <tbody>
            <?php
                //we will show all the user in a table 
                while($values = mysqli_fetch_array($result)){
                    $status = $values['status'] == 1 ? "true" : "false";

                    echo "
                        <tr>
                            <td>{$values['name']}</td>
                            <td>{$values['description']}</td>
                            <td>
                                <video width='320' height='180' controls>
                                    <source src='{$values['link']}' type='video/mp4'>
                                </video>
                            </td>
                            <td>{$values['prices']}</td>
                            <td>{$status}</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>

<?php
    require_once '../../partials/footer.php';
?>
