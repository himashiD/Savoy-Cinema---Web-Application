<?php include('partials-front/front-menu.php'); ?>

<!--About section start -->
<section class="about">
        
        <div class="about-container">
        <div class="about-image">
            <img src="images/front/about3.jpg" alt="savoy" />
        </div>
        <div class="about-content">
            <h2>About Us</h2>
            <p>
            Welcome to Savoy Cinema Theater, where movie magic comes alive! Nestled in the heart of the city, Savoy has been the go-to destination for film enthusiasts since its inception. Our state-of-the-art screens and sound systems offer an unparalleled cinematic experience, ensuring you enjoy every moment of your favorite films. From the latest blockbusters to timeless classics, we curate a diverse selection that caters to all tastes. Beyond movies, our cozy lounge and gourmet concessions make for the perfect outing. At Savoy, we are committed to delivering unforgettable memories, one film at a time.
            </p>
            <div class="services">
                <div class="service">
                    <h3>Services</h3>
                    <button><a href="#services" class="btn">Learn More</a></button>
                </div>
                <div class="service">
                    <h3>Gallery</h3>
                    <button><a href="main-gallery.php" class="btn">Learn More</a></button>
                </div>
                <div class="service">
                    <h3>Movies</h3>
                    <button><a href="main-movies.php" class="btn">Learn More</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="vission-mission">
        <div class="form vision">
            <h2>Vision</h2>
            <label>
                <h3>To be the leading cinema theater in the region, known for providing exceptional cinematic experiences that bring stories to life and connect communities through the magic of film.</h3>
            </label>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Our Mission? Click here!</h3>
                </div>
                <div class="img__text m--in">
                    <h3>Our Vision? Click here!</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Mission</span>
                    <span class="m--in">Vision</span>
                </div>
            </div>
            <div class="form mission">
                <h2>Mission</h2>
                <label>
                    <h3>To provide an unmatched movie experience with advanced technology, diverse films, and excellent service, creating a welcoming space for all movie lovers to enjoy and make lasting memories.</h3>
                </label>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.vission-mission').classList.toggle('s--signup');
        });
    </script>
</section>
<!--About section end -->


<!--Start service section -->


<section id="services" class="services-section">
    <div class="container">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-card" data-service="ticket-booking">
                <img src="images/front/image1.jpg" alt="Ticket Booking">
                <h3>Ticket Booking</h3>
                <p>Easy and convenient ticket booking for all shows. Reserve your seats online and avoid the queue.</p>
                <button class="btn-more">Learn More</button>
            </div>
            <div class="service-card" data-service="concessions">
                <img src="images/front/canteen.jpg" alt="Concessions">
                <h3>Concessions</h3>
                <p>Enjoy a wide range of snacks and beverages while watching your favorite movies.</p>
                <button class="btn-more">Learn More</button>
            </div>
            <div class="service-card" data-service="special-events">
                <img src="images/front/event.jpg" alt="Special Events">
                <h3>Special Events</h3>
                <p>Join us for special screenings, premieres, and themed events throughout the year.</p>
                <button class="btn-more">Learn More</button>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('click', () => {
            const serviceType = card.getAttribute('data-service');
            alert(`You clicked on the ${serviceType} service.`);
            // You can also redirect or open a modal here
        });
      });
    });
    </script>
    
</section>

<!--End service section -->



<?php include('partials-front/front-footer.php'); ?>