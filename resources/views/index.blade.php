@include('header')
<section id="hero" class="hero section dark-background">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 text-center">
                    <h2>At Mathiyane Electrical Pty Ltd</h2>
                    <p>
                        We are dedicated to providing top-notch electrical solutions that keep your home and business
                        powered up and running smoothly.
                        Whether you need installation, service, Repairs, or emergency assistance, our team of
                        professionals is just a phone call away
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
                    <h3>Are you ready to experience reliable and efficient electrical solutions tailored to your needs?
                    </h3>
                    <p>
                        Don't wait any longer! Fill out our easy-to-use form to get a personalized quote today.
                        Our team of experts will assess your requirements and provide you with a competitive and
                        detailed estimate.
                        Signing up is quick and hassle-free, ensuring you get the best service at the best price.
                        Empower your space with Mathiyane Electrical – your trusted partner for all your electrical
                        needs.
                    </p>
                </div>
            </div>

            <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
              
                      @livewire("quote-form")

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
                                    Tailored solutions for uninterrupted power supply, harnessing the power of solar
                                    energy
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
                            <div class="card-bg"><img src="assets/img/geyserintellengce.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Geyser Intelligent Controller</h4>
                                <p>Innovative controllers for both solar and electrical geysers, enhancing energy
                                    efficiency and saving you money.</p>
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
                                <p>Comprehensive inspection and testing services, providing Certification of Compliance
                                    (CoC) for your peace of mind.</p>
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
                                <p>Rapid response to all electrical emergencies, ensuring minimal downtime and quick
                                    restoration of service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/gate.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Gate Automation</h4>
                                <p>Reliable and secure automation solutions for your gates, enhancing convenience and security.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Card Item -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-item">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card-bg"><img src="assets/img/meter.jpg" alt=""></div>
                        </div>
                        <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                                <h4 class="card-title">Meter Box</h4>
                                <p>Professional installation of meter boxes for accurate and efficient power management.</p>
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
                            <h4>Geyser Controller</h4>
                            <a href="assets/img/projects/features-1.jpg" title="Geyser Controller"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Geyser">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Geyster with controller</h4>

                            <a href="assets/img/projects/features-9.jpg" title="Geyster with controller"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div> <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Solarsystems">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Inverter</h4>
                            <a href="assets/img/projects/features-2.jpg" title="Inverter"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
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
                            <a href="assets/img/projects/features-8.jpg" title="Backup and Batteries"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div> <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Repairs filter-Electricity">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>DB Box</h4>

                            <a href="assets/img/projects/features-10.jpg" title="DB Box"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Repairs filter-Electricity">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/features-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Repairs</h4>

                            <a href="assets/img/projects/features-3.jpg" title="Repairs"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-meter">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/meter.jpg" class="img-fluid" alt="Meter Box">
                        <div class="portfolio-info">
                            <h4>Meter Box</h4>
                            <a href="assets/img/projects/meter.jpg" title="Meter Box"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div> <!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Repairs filter-gate">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/gate.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gate Motor</h4>

                            <a href="assets/img/projects/gate.jpg" title="Gate Motor"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="project-details" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-Repairs filter-gate">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/projects/gate2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gate Motor</h4>

                            <a href="assets/img/projects/gate2.jpg" title="Gate Motor"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
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

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Here is what are our happy customers are saying about us</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                alt="">
                            <h3>Olga Magwai</h3>
                            <h4>Project Manager from Humana People To People SA</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>
                                    The team for Mathiyane Electrical was so professional when doing their work and having a
                                    very good communication in terms of project proceedings. As an organization we didn’t find
                                    any difficulties when working with them. They are quick to respond to any request and keep
                                    their promises. They take initiative they are certainly the organization to rely on    
                                </span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                alt="">
                            <h3>Calvin Mlungisi Khumalo</h3>
                            <h4>Resident</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>
                                    Mathiyane Electrical (Pty) Ltd has successfully
                                    completed the installation of a ACDC 5KW system with 5.12 kWH Dyness battery and
                                    6 X Solar Panel 435W in January 2024 at my Pimville property.
                                    I can also confirm that in all my three properties Mathiyane Electrical has played a
                                    significant role in making sure that all electrical requirements are met
                                </span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->


@include('footer')
