<?php
session_start();
// Authorized - Access Control
// Check whether the user is logged in or not
if (!isset($_SESSION['user'])) { // If user session not set
    // User is not logged in
    // Redirect to login page with message
    $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Savoy.</div>";
    // Redirect to login Page
    header('location:' . SITEURL . 'user/login.php');
}
?>
