<?php

// Include constants file
include('../config/constants.php');

// Check whether the id and image_name values are set or not
if (isset($_GET['id']) && isset($_GET['image_name'])) {
    // Get the values and delete
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    // Remove the physical image file if available
    if ($image_name != "") {
        // Image is available, so remove it
        $path = "../images/offers/" . $image_name;
        // Remove the image
        $remove = unlink($path);

        // If failed to remove image, then add an error message and stop the process
        if (!$remove) {
            // Set the session message
            $_SESSION['remove'] = "<div class='error'>Failed to Remove Offers Image.</div>";
            // Redirect to manage offer page
            header('location:' . SITEURL . 'admin/manage-offers.php');
            // Stop the process
            die();
        }
    }

    // Delete data from the database
    // SQL Query to delete data from the database
    $sql = "DELETE FROM offers_table WHERE id=$id";

    // Execute the query
    $res = mysqli_query($conn, $sql);

    // Check whether the data is deleted from the database or not
    if ($res == true) {
        // Set success message and redirect 
        $_SESSION['delete'] = "<div class='success'>Offers Deleted Successfully.</div>";
    } else {
        // Set fail message and redirect
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Offers.</div>";
    }

    // Redirect to manage offers page
    header('location:' . SITEURL . 'admin/manage-offers.php');
} else {
    // Redirect to manage offers page
    header('location:' . SITEURL . 'admin/manage-offers.php');
}

?>
