<?php
include('../config/constants.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login-SAVOY</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="user-login-container">
    <img class="bg-image">
    <div class="content">
        <h2>Login</h2>

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>

        <form action="" method="POST">
            <input type="text" id="username" name="username" placeholder="Enter Your Username" required>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            <button type="submit" name="submit" value="Login">Login</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</div>

<?php
// Check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
    // Process for Login
    // 1. Get the Data from Login Form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);

    // 2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM register_table WHERE username = '$username' AND password = '$password'";

    // 3. Execute the query
    $res = mysqli_query($conn, $sql);

    // 4. Count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        // User available and login success
        $_SESSION['login'] = "<div class='success'>Login successfully.</div>";
        $_SESSION['user'] = $username; // To check whether the user is logged in or not, logout will unset
        // Redirect to home page / dashboard
        header('location:' . SITEURL . 'home.php');
    } else {
        // User not available and login fail
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        // Redirect to login page
        header('location:' . SITEURL . 'user/login.php');
    }
}
?>
</body>
</html>
