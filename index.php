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
    <div id="home-banner"
        class="carousel"
        data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Single Video Slide -->
            <div class="item active">
                <!-- Background Video -->
                <video autoplay muted loop playsinline style="width: auto; height: 100%; object-fit: cover;">
                    <source src="videos/banner-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!-- Slide Text Layer -->
                <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                    <span class="white">Experts in Structural Steel Construction</span>
                    <h1 class="white" style="line-height: 1;">Building Strength.</h1>
                    <h1 class="white">Building Trust.</h1>
                    <p class="white mar-bottom-25" style="font-size: 20px">
                        Delivering safe, efficient, and quality driven steel erection
                        solutions that turn your vision into reality on time, every time.
                    </p>
                    <a href="/about.php" class="btn mt_btn_yellow">Learn more</a>
                </div>
            </div>
        </div>
    </div> <!-- End Slider -->

    <?php include 'includes/components/about-section.php'; ?>

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
                        <img src="images/services/structure.jpg" alt="services-1">
                        <div class="box-content">
                            <h3>Hot Rolled Steel Structures</h3>
                            <p>Safe, efficient, and timely erection of steel structures from high-rise frameworks to
                                complex industrial installations handled by certified professionals and modern
                                equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="box mar-bottom-30 text-center">
                        <img src="images/services/pre-engine.jpg" alt="services-2">
                        <div class="box-content">
                            <h3>Pre-Engineered Building</h3>
                            <p>Expert installation of pre-engineered steel buildings for warehouses, factories, and
                                commercial spaces, ensuring structural integrity and smooth project delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="box mar-bottom-30 text-center">
                        <img src="images/services/steel-fabri.jpg" alt="services-3">
                        <div class="box-content">
                            <h3>Roof Cladding</h3>
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
    <a id="back-to-top" href="#" class="back-to-top" role="button" title=""
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