<?php
    require_once '../../partials/navbar.php';
?>

<?php
    require_once '../../lib/database.php';
    require_once '../../lib/show.php';

    $connection = connection_with_database();

    $course = $_POST['course'];
    $query = "SELECT * FROM `course` WHERE `name`='$course'";
    $result = mysqli_query($connection, $query);
    if ($result && $values = mysqli_fetch_array($result)) {
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Edit a course</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link rel='stylesheet' href='../../../../public/css/users/formUser.css'>
            <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        </head>
        <body>
            <div class='container'>
            <h2>Edit a course</h2>
            <hr>
            <form action='updateCourse.php' method='POST'>
                <input type='hidden' name='courseId' value='{$values["id"]}'>
                <div class='mb-3'>
                    <label for='name' class='form-label'>Name:</label>
                    <input type='text' id='name' name='name' class='form-control' value='{$values["name"]}' readonly>
                </div>
                <div class='mb-3'>
                    <label for='description' class='form-label'>Description:</label>
                    <textarea id='description' name='description' class='form-control' required>{$values["description"]}</textarea>
                </div>
                <div class='mb-3'>
                    <label for='link' class='form-label'>Link:</label>
                    <input type='text' id='link' name='link' class='form-control' value='{$values["link"]}'>
                </div>
                <div class='mb-3'>
                    <label for='prices' class='form-label'>Price:</label>
                    <input type='text' id='prices' name='prices' class='form-control' value='{$values["prices"]}' required>
                </div>
                <div class='mb-3'>
                    <label for='status' class='form-label'>Status:</label>
                    <select id='status' name='status' class='form-select'>
                        <option value='1' " . ($values["status"] == 1 ? "selected" : "") . ">Activate</option>
                        <option value='0' " . ($values["status"] == 0 ? "selected" : "") . ">Disabled</option>
                    </select>
                </div>
                <div class='mb-3'>
                    <label for='available_date' class='form-label'>Available Date:</label>
                    <input type='date' id='available_date' name='available_date' class='form-control' value='{$values["available_date"]}' required>
                </div>
                <div class='mb-3'>
                    <label for='available_time' class='form-label'>Available time:</label>
                    <input type='time' id='available_time' name='available_time' class='form-control' value='{$values["available_time"]}' required>
                </div>
                <button type='submit' class='btn btn-primary'>Update</button>
            </form>
            <form id='deleteForm' action='deleteCourse.php' method='POST'>
                <input type='hidden' name='courseId' value='{$values["id"]}'>
                <button type='button' class='btn btn-danger' onclick='delete_course()'>Delete</button>
            </form>
        </div>
        </body>
        <script>
            async function delete_course() {
                if (await show_question('Delete Course', 'Do you want to delete this Course?')) {
                    document.getElementById('deleteForm').submit();
                }
            }
        </script>
        </html>
        ";
    } else {
        show_message_error("This course does not exist");
        exit();
    }

    mysqli_close($connection);
?>

<?php
    require_once '../../partials/footer.php';
?>
