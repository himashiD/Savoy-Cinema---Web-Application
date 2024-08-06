
<?php include('partials-front/front-menu.php'); ?>



<section id="slide banners">
    <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1>SAVOY</h1>
                    <p>| CINEMA |</p>
                </div>

                <img src="images/front/home-img1.png" alt="Original">
            </div>
        </div>

        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h1>SAVOY</h1>
                    <p>| CINEMA |</p>
                </div>

                <img src="images/front/home-img2.png" alt="Duotone">
            </div>
        </div>

        <div class="handle"></div>
    </div> 

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
    });
    </script>

</section>

<!-- Offers Section Starts Here -->
<section class="offers">
        <div class="container">
            <h2 class="sub-text">SPECIAL OFFERS</h2>

            <?php

            //Display all the offers that are active
            //sql query
            $sql = "SELECT * FROM offers_table WHERE active='Yes'";

            //Execute the query
            $res = mysqli_query($conn, $sql);
            
            //count Rows
            $count = mysqli_num_rows($res);

            //check wheather offers available or not
            if($count>0)
            {
                //offers available
                while($row=mysqli_fetch_assoc($res))
                {
                    //get the values
                    $id = $row['id'];
                    $image_name = $row['image_name'];

                    ?>
                    <div class="box-4 float-container">

                    <?php
                    if($image_name=="")
                    {
                        //Image not Available
                        echo "<div class='error'> Image not Found.</div>";
                    }
                    else
                    {
                        //Image available
                        ?>

                        <img src="<?php echo SITEURL; ?>images/offers/<?php echo $image_name; ?>" alt="catoon" class="img-responsive img-curve">
                        <?php
                    }

                    ?>
                    </div>
                    <?php
                }
            }
            else
            {
                //offers not Available
                echo "<div class='error'>Offers not fround.</div>";
            }

            ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- offers Section Ends Here -->


<?php include('partials-front/front-footer.php'); ?>

  
