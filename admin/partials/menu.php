<?php 
include('../config/constants.php'); 
include('login-check.php');

?>


<html>
    <head>
        <link rel="stylesheet" href="../css/admin.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
        <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
        <div class="sidebar">
            <header>Menu</header>
            <a href="index.php" class="active">
                <i class="fas fa-qrcode"></i>
                <span>Dashboard</span>
            </a>

            <a href="manage-admin.php">
            <i class="fa fa-user"></i>
                <span>MANAGE ADMIN</span>
            </a>

            <a href="manage-theater-time.php">
            <i class="fa fa-film"></i>
               <span>MANAGE SHOWS</span>
            </a>

            <a href="manage-category.php">
            <i class="fa fa-th-large"></i>
               <span>MANAGE CATEGORY</span>
            </a>

            <a href="manage-movie.php">
               <i class="fa fa-th-list"></i>
               <span>MANAGE FILMS</span>
            </a>

            <a href="manage-offers.php">
            <i class="fa fa-star"></i>
               <span>MANAGE OFFERS</span>
            </a>

            <a href="manage-booking.php">
               <i class="fas fa-calendar"></i>
               <span>MANAGE BOOKINGS</span>
            </a>

            <a href="login.php">
               <i class="far fa-question-circle"></i>
               <span>LOGOUT</span>
            </a>
        </div>