<?php include('partials-front/front-menu.php'); ?>

<section id="gallery">
<div class="gallery-container">
        <!-- Gallery Item 1 -->
        <div class="gallery-item">
            <img src="images/front/g5.jpg" alt="Gallery Image 1">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 2 -->
        <div class="gallery-item">
            <img src="images/front/g2.jpg" alt="Gallery Image 2">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 3 -->
        <div class="gallery-item">
            <img src="images/front/g3.jpg" alt="Gallery Image 3">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 4 -->
        <div class="gallery-item">
            <img src="images/front/g4.jpg" alt="Gallery Image 4">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 5 -->
        <div class="gallery-item">
            <img src="images/front/g1.jpg" alt="Gallery Image 5">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 6 -->
        <div class="gallery-item">
            <img src="images/front/g6.jpg" alt="Gallery Image 6">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 7 -->
        <div class="gallery-item">
            <img src="images/front/g7.jpg" alt="Gallery Image 7">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 8 -->
        <div class="gallery-item">
            <img src="images/front/g8.jpg" alt="Gallery Image 8">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 9 -->
        <div class="gallery-item">
            <img src="images/front/g9.jpg" alt="Gallery Image 9">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 10 -->
        <div class="gallery-item">
            <img src="images/front/g10.jpg" alt="Gallery Image 10">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 11 -->
        <div class="gallery-item">
            <img src="images/front/g11.jpg" alt="Gallery Image 11">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 12 -->
        <div class="gallery-item">
            <img src="images/front/g12.jpg" alt="Gallery Image 12">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 13 -->
        <div class="gallery-item">
            <img src="images/front/g13.jpg" alt="Gallery Image 13">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 14 -->
        <div class="gallery-item">
            <img src="images/front/g14.jpg" alt="Gallery Image 14">
            <div class="overlay">View Image</div>
        </div>
        <!-- Gallery Item 15 -->
        <div class="gallery-item">
            <img src="images/front/g15.jpg" alt="Gallery Image 15">
            <div class="overlay">View Image</div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modal-image">
    </div>

    <script>
        // JavaScript for handling modal interactions
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("modal");
            const modalImage = document.getElementById("modal-image");
            const closeBtn = document.getElementsByClassName("close")[0];

            // Event listener for each gallery item
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', function () {
                    modal.style.display = "flex";
                    modalImage.src = this.querySelector('img').src;
                });
            });

            // Close button functionality
            closeBtn.onclick = function () {
                modal.style.display = "none";
            }

            // Click outside the modal content to close
            window.onclick = function (event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
  

</section>

<?php include('partials-front/front-footer.php'); ?>