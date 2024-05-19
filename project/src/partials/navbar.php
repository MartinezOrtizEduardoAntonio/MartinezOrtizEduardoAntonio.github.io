<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<title>CAPACITAT</title>
<meta charset='UTF-8'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='/project/public/css/users/formUser.css'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>


<!-- jsPDF library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


<?php
  session_start(); //activate the session 

  //we will waching if exist a session activate 
  if (isset($_SESSION['username'])) {
    //we will see that level of privilage have the user 
    $privilage=$_SESSION['privilege'];//get the privilage of the user

    //admin 
    if($privilage==3){
        echo"
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='/project/src/views/users/dashboard.php'>CapacitaT</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav'>
              <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='/project/src/views/users/dashboard.php'>Home</a>
              </li>
              <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                  Teacher
                </a>
                <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                  <li><a class='dropdown-item' href='/project/src/views/teacher/teacher.php'>Show all the teacher</a></li>
                </ul>
              </li>
              <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                  Users
                </a>
                <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                  <li><a class='dropdown-item' href='/project/src/views/users/users.php'>Show all the users</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/users/customer.php'>Show all customer</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/users/admin.php'>Show all admin</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/users/addUsers/addUser.php'>Add a new user</a></li>
                </ul>
              </li>
              <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                  Courses
                </a>
                <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                  <li><a class='dropdown-item' href='/project/src/views/course/courses.php'>Show all the courses</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/course/courseActivate.php'>show the course activate</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/course/courseDesactivate.php'>show the course desactivate</a></li>
                  <li><a class='dropdown-item' href='/project/src/views/course/addCourse.php'>Add a new course</a></li>
                </ul>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='/project/src/router/web/logout.php'>Log out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        ";
    }else if($privilage==2){ //teacher 
      echo"
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
      <div class='container-fluid'>
        <a class='navbar-brand' href='/project/src/views/users/dashboard.php'>CapacitaT</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavDropdown'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link active' aria-current='page' href='/project/src/views/users/dashboard.php'>Home</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                Courses
              </a>
              <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
              <li><a class='dropdown-item' href='/project/src/views/course/courses.php'>Show all the courses</a></li>
              <li><a class='dropdown-item' href='/project/src/views/course/courseActivate.php'>show the course activate</a></li>
              <li><a class='dropdown-item' href='/project/src/views/course/courseDesactivate.php'>show the course desactivate</a></li>
              <li><a class='dropdown-item' href='/project/src/views/course/addCourse.php'>Add a new course</a></li>
              </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='/project/src/router/web/logout.php'>Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      ";
    }else{ //user 
      echo"
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
      <div class='container-fluid'>
        <a class='navbar-brand' href='/project/src/views/users/dashboard.php'>CapacitaT</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavDropdown'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link active' aria-current='page' href='/project/src/views/users/dashboard.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='/project/src/views/users/courses/storeCourse.php'>Explore courses</a>
            </li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                My Course
              </a>
              <ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                <li><a class='dropdown-item' href='/project/src/views/users/courses/myCourses.php'>Show all my courses</a></li>
              </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='/project/src/router/web/logout.php'>Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      ";
    }
  } else {
      //if the session not is activate, redirect to the web of login  
      header("Location: /project/src/router/web/login.php");
  }
?>
