<?php
session_start(); // Start session

// Check whether the user is logged in or not
if (!isset($_SESSION['user'])) { // If user session is not set
    // User is not logged in
    // Redirect to login page with message
    $_SESSION['no-login-message'] = "<div class='error text-center'> Please login to access Admin Panel.</div>";
    // Redirect to login Page
    header('location:' . SITEURL . 'admin/login.php');
    exit(); // Ensure no further code is executed
}
?>
