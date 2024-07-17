@include('header')
<section id="hero" class="hero section dark-background">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 text-center">
                    <h2>At Mathiyane Electrical</h2>
                    <p>
                        we are dedicated to providing top-notch electrical solutions that keep your home and business powered up and running smoothly.
                        Whether you need installation, service, Repairs, or emergency assistance, our team of professionals is just a phone call away
                    </p>
                    <a href="#get-started" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
            <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
        </div>

        <div class="carousel-item active">
            <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        </div>

        <div class="carousel-item">
            <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section><!-- /Hero Section -->

<!-- Get Started Section -->
<section id="get-started" class="get-started section">

    <div class="container">

        <div class="row justify-content-between gy-4">

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="content">
                    <h3>Are you ready to experience reliable and efficient electrical solutions tailored to your needs?</h3>
                    <p>
                        Don't wait any longer! Fill out our easy-to-use form to get a personalized quote today.
                        Our team of experts will assess your requirements and provide you with a competitive and detailed estimate.
                        Signing up is quick and hassle-free, ensuring you get the best service at the best price.
                        Empower your space with Mathiyane Electrical – your trusted partner for all your electrical needs.
                    </p>
                </div>
            </div>

            <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                <form action="forms/quote.php" method="post" class="php-email-form">
                    <h3>Get a quote</h3>
                  
                    <div class="row gy-3">

                        <div class="col-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="">
                        </div>

                        <div class="col-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                required="">
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone"
                                required="">
                        </div>

                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                            <button type="submit">Get a quote</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Quote Form -->

        </div>

    </div>

</section><!-- /Get Started Section -->

<!-- Constructions Section -->
<section id="constructions" class="constructions section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
       
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/constructions-1.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Solar and Back-Up Power Systems</h4>
                                <p>
                                    Tailored solutions for uninterrupted power supply, harnessing the power of solar energy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/constructions-2.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Geyser Intelligent Controller</h4>
                                <p>Innovative controllers for both solar and electrical geysers, enhancing energy efficiency and saving you money.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/constructions-3.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Electrical Inspection and Testing</h4>
                                <p>Comprehensive inspection and testing services, providing Certification of Compliance (CoC) for your peace of mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/constructions-4.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Emergency Repairs</h4>
                                <p>Rapid response to all electrical emergencies, ensuring minimal downtime and quick restoration of service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

        </div>

    </div>

</section><!-- /Constructions Section -->



<!-- Projects Section -->
<section id="projects" class="projects section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>A list of previous jobs we have done.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-Electricity">Electricity</li>
                <li data-filter=".filter-Solarsystems">Solar Systems</li>
                <li data-filter=".filter-Repairs">Repairs</li>
                <li data-filter=".filter-Geyser">Geyser</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Geyser">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Genyser Controller</h4>
                            <a href="assets/img/projects/features-1.jpg" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Solarsystems">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inverter</h4>                            
                            <a href="assets/img/projects/features-2.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Repairs">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>DB Box</h4>
                            
                            <a href="assets/img/projects/features-5.jpg" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Geyser">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Geyster with controller</h4>
                            
                            <a href="assets/img/projects/features-4.jpg" title="Branding 1"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Electricity">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Repairs</h4>
                            
                            <a href="assets/img/projects/features-3.jpg" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Solarsystems">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Backup and Batteries</h4>
                            <a href="assets/img/projects/features-8.jpg" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->
               
            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section>

@include('footer')
