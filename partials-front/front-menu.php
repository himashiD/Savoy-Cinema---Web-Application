<?php 
include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savoy Cinama</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo-img.png" alt="Savoy Logo" class="logo-shep">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>main-home.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>main-about.php">About</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>main-gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>main-contact.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>user/login.php">Login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->