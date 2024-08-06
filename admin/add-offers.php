<?php include('partials/menu.php'); ?>

<div class="frame">
<div class="main-content">
    <div class="wrapper">
        <h1>ADD OFFERS</h1>
        <br><br>

        <?php

        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }


        ?>
        <br><br>

        <!-- Add offers From Starts-->

        <form action="" method="POst" enctype="multipart/form-data">
            <table class="tbl-30">

                <tr>
                    <td>Select Image </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Active : </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Offers" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <!-- Add offers From Ends-->

        <?php

        //Check wheather the submit button is Clicked or not
        if(isset($_POST['submit']))
        {
            //echo "Clicked";

            //1.Get the value from Category Form
            $title = $_POST['title'];

            //For Radio input,we need to check wheather the button is selected or not

            if(isset($_POST['active']))
            {
                $active = $_POST['active'];
            }
            else
            {
                $active = "No";
            }

            //Check weather the image is selected or not and set the value for image name accoridingly
            //print_r($_FILES['image']);

            //die(); //Break the code here

            if(isset($_FILES['image']['name']))
            {
                //uploard the image
                //to uplord image we need image name, source path and destination path
                $image_name = $_FILES['image']['name'];

                //Upload the image only if image is selected
                if($image_name != "")
                {
                    
                    //Auto Rename or Image
                    //Get the Extentiom of our image (jpg,png,gif,etc)eg."special.offers1.jpg"
                    $ext = end(explode('.', $image_name));
    
                    //rename the image
                    $image_name = "Offers_Category_".rand(000, 999).'.'.$ext;
                    
                    $source_path = $_FILES['image']['tmp_name'];
    
                    $destination_path ="../images/offers/".$image_name;
    
                    //Finally uplord the image
                    $upload = move_uploaded_file($source_path,$destination_path);
    
                    //check wheather the image is uplorded or not
                    //And if the image is not uplorded then we will stop the process and redirect with error message
                    if($upload==false)
                    {
                        //set message
                        $session['upload'] = "<div class='error'>Failed to Uplord Image.</div>";
                        //Redirect to add offers
                        header('location:'.SITEURL.'admin/add-offers.php');
                        //Stop the process
                        die();
                    }
                }
                
            }
            else{
                // Don't uploard Image and set the image_name value as blank
                $image_name="";
            }

            //2. Create SQL Query to Insert offers in Databse
            $sql = "INSERT INTO offers_table SET
            image_name ='$image_name',
            active = '$active'
            ";

            //3. Execute the Query and Sve in databse
            $res = mysqli_query($conn, $sql);

            //4. Check wheather the query  executed or not and data added or not

            if($res==true)
            {
               //Query Executed and offers Added
               $_SESSION['add'] = "<div class='success'>Offers Added Successfully.</div>";
               //Readirect to Manage offers Page
               header('location:'.SITEURL.'admin/manage-offers.php');
            }
            
            else{
               //Failed to Add offers
               $_SESSION['add'] = "<div class='error'>Failed to Add Offers.</div>";
               //Readirect to Manage offers Page
               header('location:'.SITEURL.'admin/add-offers.php');
            }
        }

        ?>

    </div>
</div>
<?php include('partials/footer.php'); ?>
</div>
