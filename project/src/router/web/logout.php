<?php
    session_start(); // start session

    // Delete all session variables
    $_SESSION = array();

    // Invalidate session cookie if present
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-42000, '/');
    }

    // close the session
    session_destroy();

    // redirect to the user to the web of login
    header("Location: login.php");
    exit;
?>