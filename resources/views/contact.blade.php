@include('header')
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
    <div class="container position-relative">
        <h1>Contact</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">Contact</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>
                        Stand No 1431, Immink Drive, Diepkloof Zone 1, Johannesburg, 1864
                    </p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>060 550 3634 / 078 169 6304</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                    data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@mythelectrical.co.za</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14312.736334862868!2d27.9427967!3d-26.2556883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9509c92ddcce2b%3A0xa75d420e34d9d4de!2sMathiyane%20Electrical!5e0!3m2!1sen!2sza!4v1721208651018!5m2!1sen!2sza"
                    frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

        
            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
@include('footer')
