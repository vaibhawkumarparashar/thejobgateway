<?php
/*
Template Name: Homepage Template
*/
get_header();
?>
<div class="container-xxl bg-white p-0">
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Empowering Bihar & UP Youth with Real Job Opportunities</h1>
                    <p class="text-white pb-3 animated zoomIn">At The Job Gateway, we specialize in connecting 11th & 12th pass students and ITI graduates with verified job opportunities in Bihar and Uttar Pradesh. Fast, easy, and reliable application and placement support.</p>
                    <a href="#about" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">How It Works</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png" alt="The Job Gateway Hero Image">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about.png" alt="About The Job Gateway">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About The Job Gateway</div>
                <h2 class="mb-4">Bridging the Gap Between Talent and Opportunity in Bihar & UP</h2>
                <p class="mb-4">The Job Gateway is dedicated to helping 11th, 12th, and ITI pass candidates from Bihar and UP find meaningful employment. Our team personally verifies every applicant and connects them with trusted companies across multiple industries.</p>
                <div class="row g-3 mb-4">
                    <div class="col-12 d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                            <i class="fa fa-user-check text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h6>Candidate Verification</h6>
                            <span>We verify all applications within 7 days to ensure genuine candidates are forwarded to companies.</span>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h6>Direct Contact</h6>
                            <span>Once verified, our team contacts candidates directly via phone or email to discuss opportunities.</span>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="#service">Explore Services</a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h3 class="text-white">Get Job Alerts from The Job Gateway</h3>
                <small class="text-white">Stay updated with new job opportunities for 11th/12th/ITI pass candidates in Bihar & UP.</small>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2">
                        <i class="fa fa-paper-plane text-primary fs-4"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                <img class="img-fluid" style="max-height: 140px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/newsletter.png" alt="Newsletter">
            </div>
        </div>
    </div>
</div>

<div class="container-xxl" id="service">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
            <h2 class="mb-5">Job Placement Support for Youth in Bihar & UP</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100">
                    <div class="d-flex justify-content-between">
                        <div class="service-icon">
                            <i class="fa fa-briefcase fa-2x"></i>
                        </div>
                        <a class="service-btn" href="">
                            <i class="fa fa-link fa-2x"></i>
                        </a>
                    </div>
                    <div class="p-5">
                        <h5 class="mb-3">Job Matching for 11th & 12th Pass</h5>
                        <span>We connect school graduates with suitable entry-level roles across sectors in Bihar and UP.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded h-100">
                    <div class="d-flex justify-content-between">
                        <div class="service-icon">
                            <i class="fa fa-tools fa-2x"></i>
                        </div>
                        <a class="service-btn" href="">
                            <i class="fa fa-link fa-2x"></i>
                        </a>
                    </div>
                    <div class="p-5">
                        <h5 class="mb-3">Placement for All ITI Branches</h5>
                        <span>We support ITI-certified candidates in securing roles relevant to their specialization.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item rounded h-100">
                    <div class="d-flex justify-content-between">
                        <div class="service-icon">
                            <i class="fa fa-edit fa-2x"></i>
                        </div>
                        <a class="service-btn" href="">
                            <i class="fa fa-link fa-2x"></i>
                        </a>
                    </div>
                    <div class="p-5">
                        <h5 class="mb-3">Free Application Support</h5>
                        <span>Our easy registration process makes it simple for candidates to apply and get noticed.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>