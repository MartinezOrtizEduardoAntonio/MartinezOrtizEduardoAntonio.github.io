<?php
    require_once '../../../partials/navbar.php';
?>

<?php
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    $connection = connection_with_database();
    $username = $_POST['username'];
    $query="SELECT * FROM `users` WHERE `username`='$username'";
    $result=mysqli_query($connection,$query) or die ("error insert ".mysqli_error());
    
    
    if($values=mysqli_fetch_array($result)){

        echo "
        <!DOCTYPE html>
        <head>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>Insertar Usuario</title>
            <link rel='stylesheet' href='../../../../public/css/users/formUser.css'>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        </head>
        <body>
            <div class='container'>
            <h2>Edit a user</h2>
            <hr>
            <form action='editUserForm.php' method='POST'>
                <label for='email'>Email:</label>
                <input type='email' id='email' name='email' required value='{$values["email"]}' readonly>
                
                <label for='username'>User Name:</label>
                <input type='text' id='username' name='username' required value='{$values["username"]}'>
        
                <label for='first_name'>Name:</label>
                <input type='text' id='first_name' name='first_name' required value='{$values["first_name"]}'>
        
                <label for='second_name'>Second Name:</label>
                <input type='text' id='second_name' name='second_name' value='{$values["second_name"]}'>
        
                <label for='last_name'>Last Name:</label>
                <input type='text' id='last_name' name='last_name' required value='{$values["last_name"]}'>
        
                <label for='password'>Password:</label>
                <input type='password' id='password' name='password' required value='{$values["password"]}'>
        
                <label for='birthday'>Birthday:</label>
                <input type='date' id='birthday' name='birthday' required value='{$values["birthday"]}'>
                
                <label for='privilege'>Privilege:</label>
                <select id='privilege' name='privilege' class='form-select'>
                    <option value='1' " . ($values["privilege"] == 1 ? "selected" : "") . ">user</option>
                    <option value='2' " . ($values["privilege"] == 2 ? "selected" : "") . ">teacher</option>
                    <option value='3' " . ($values["privilege"] == 3 ? "selected" : "") . ">admin</option>
                </select>
                <br>
                <button type='submit' class='btn btn-primary'>Update</button>
            </form>
            <form id='deleteForm' action='deleteUser.php' method='POST'>
            <input type='hidden' id='userId' name='userId' value='{$values["id"]}'>
                <button type='button' class='btn btn-danger' onclick='delete_user()'>Delete</button>
            </form>
        </div>
        </body>

        <script>
            async function delete_user(){
                if(await show_question('Delete user','Do you would like delete this user?')){
                    document.getElementById('deleteForm').submit(); //this if for send the form delete 
                }
            }
        </script>
        ";
    } else {
        // if not exist user, show a message of error and reload the web page
        show_message("this user not exist");
        header("Location: ../users.php");
        exit(); 
    }

    mysqli_close($connection);
?>

<?php
    require_once '../../../partials/footer.php';
?>
