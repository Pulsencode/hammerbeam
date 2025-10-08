<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<?php include 'includes/layouts/head.php'; ?>

<body>
    <!--PRELOADER-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <?php include 'includes/layouts/header.php'; ?>
    <!-- Slider -->
    <div id="home-banner vh-100"
        class="carousel"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Single Video Slide -->
            <div class="item active">
                <!-- Background Video -->
                <video autoplay muted loop playsinline class="video-bg">
                    <source src="videos/banner-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Slide Text Layer -->
                <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                    <span class="white">Experts in Structural Steel Construction</span>
                    <h1 class="white">Building Strength. Building Trust.</h1>
                    <p class="white mar-bottom-25">
                        Delivering safe, efficient, and quality-driven steel erection
                        solutions that turn your vision into reality — on time, every time.
                    </p>
                    <a href="#" class="btn mt_btn_yellow">Learn more</a>
                </div>
            </div>
        </div>

        <!-- Left Control -->
        <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End Slider -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">

            <div class="about_inner">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="about-content">
                            <span class="mar-bottom-15">About Company</span>
                            <h2 class="mar-bottom-30">We build with precision, <br> passion, and purpose.</h2>
                            <p class="mar-bottom-40">At HammerBeam Contracting LLC, we are dedicated to shaping the
                                future of steel construction through innovation, safety, and reliability.
                                Every project begins with a deep understanding of our client's vision, ensuring the
                                right planning, materials, and methods are applied for flawless execution.
                                Our team of experienced professionals brings technical expertise and a commitment to
                                excellence to every site. Whether it's complex structural steel erection or tailored
                                steel solutions, we deliver with precision, safety, and trust.</p>
                            <a href="#" class="btn mt_btn_yellow">Our Services</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow slideInDown">
                        <div class="about-img">
                            <img src="images/project/bw12.jpg">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <!--* Services*-->
    <section id="mt_services" class="wow slideInLeft">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <!-- section title -->
                    <div class="section_heading">
                        <h2 class="section_title">
                            <span>Our Expertise in Steel Construction</span>
                        </h2>
                        <p class="heading_txt">We provide safe, efficient, and precision-driven steel construction
                            solutions — built to meet international standards and client expectations.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="box mar-bottom-30 text-center">
                        <img src="images/blog-listing/blog_01.jpg" alt="services-1">
                        <div class="box-content">
                            <h3><a href="#">Structural Steel Erection</a></h3>
                            <p>Safe, efficient, and timely erection of steel structures from high-rise frameworks to
                                complex industrial installations handled by certified professionals and modern
                                equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="box mar-bottom-30 text-center">
                        <img src="images/blog-listing/blog_13.jpg" alt="services-2">
                        <div class="box-content">
                            <h3><a href="#">Pre-Engineered Building (PEB) Installation</a></h3>
                            <p>Expert installation of pre-engineered steel buildings for warehouses, factories, and
                                commercial spaces, ensuring structural integrity and smooth project delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="box mar-bottom-30 text-center">
                        <img src="images/blog-listing/blog_10.jpg" alt="services-3">
                        <div class="box-content">
                            <h3><a href="#">Steel Fabrication & Assembly</a></h3>
                            <p>Comprehensive fabrication and assembly solutions with precision cutting, welding, and
                                alignment — delivering strength, durability, and accuracy in every component.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Services*-->

    <?php include 'includes/components/why-choose-us.php'; ?>

    <?php include 'includes/layouts/footer.php'; ?>

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title=""
        data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>

    <!--*Scripts*-->

    <!-- Latest jquery -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!-- latest Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Easing Jquery -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- wow animated jquery -->
    <script src="js/wow.min.js"></script>

    <!-- Navigation jquery -->
    <script src="js/jquery.nav.js"></script>

    <!-- Slick jquery -->
    <script src="js/slick.js"></script>

    <!-- Slicknav jquery -->
    <script src="js/slicknav.js"></script>

    <!-- custom nav jquery -->
    <script src="js/custom-nav.js"></script>

    <!-- Modal Video Jquery -->
    <script src="js/jquery-modal-video.min.js"></script>

    <!-- LightBox Jquery -->
    <script src="js/ekko-lightbox.min.js"></script>

    <!-- CountTo Jquery -->
    <script src="js/jquery.countTo.js"></script>

    <!-- Appear Jquery -->
    <script src="js/jquery.appear.js"></script>

    <!-- custom video Jquery -->
    <script src="js/custom-video.js"></script>

    <!-- main default Jquery -->
    <script src="js/main.js"></script>



</body>

</html>