<?php include('partials-front/front-menu.php'); ?>


<section class="contact-section">
    <div class="contact-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2 class="contact-title">Have Any Questions?</h2>
                        <p>Feel free to reach out to us with any inquiries you may have. Our team is here to assist you with all your cinema needs.</p>
                        <ul class="contact-details">
                            <li>
                               <i class="fa fa-phone"></i>
                               <span>0112939979</span>
                            </li>
                            <li>
                               <i class="fas fa-envelope-open-text"></i>
                               <span>savoy-info@gmail.com</span>
                            </li>
                            <li>
                               <i class="fas fa-map-marked-alt"></i>
                               <span>No : 275/A, New Chandigarh, Colombo7</span>
                            </li>
    
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact-form" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name *" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea rows="4" name="message" class="form-control" placeholder="Enter Your Message *" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Send Us <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('partials-front/front-footer.php'); ?>