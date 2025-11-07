<?php
// Calculate base path for components
$script_path = $_SERVER['SCRIPT_NAME'];
$script_dir = dirname($script_path);

// Normalize the path (handle both forward and backslashes)
$script_dir = str_replace('\\', '/', $script_dir);
$script_dir = trim($script_dir, '/');

$base_path = '';
if (!empty($script_dir) && $script_dir != '.' && $script_dir != '/') {
    // Count the number of directory levels
    $depth = substr_count($script_dir, '/') + 1;
    $base_path = str_repeat('../', $depth);
}
?>
<!--* Testimonial*-->
<section id="mt_faq-testi" class="about_mt_faq-testi" style="margin-top: 20px ;">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <!-- section title -->
                <div class="section_heading">
                    <h2 class="section_title">
                        <span>Our Clientele</span>
                    </h2>
                    <p class="heading_txt">There are variations available majoritaey suffered alteration words which look believable
                        dolor sit.</p>
                </div>

                <div class="about-img">
                    <img src="<?php echo $base_path; ?>images/project/clientele.jpg" alt="about image">
                </div>

            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="mt_testimonial">
                    <!-- section title -->
                    <div class="section_heading">
                        <h2 class="section_title">
                            <span>What Say Our Client</span>
                        </h2>
                        <p class="heading_txt">There are variations available majoritaey suffered alteration words which look believable
                            dolor sit.</p>
                    </div>

                    <div class="row slider-testi">
                        <div class="col-xs-12">
                            <div class="testimonial_main">
                                <p class="mar-bottom-30">
                                    Hammerbeam Contracting delivered our steel structure exactly as promised — on schedule and with flawless execution. Their team is technically strong and handled every phase professionally.
                                </p>
                                <div class="client-pic"><img src="<?php echo $base_path; ?>images/testimonial/testimonial_1.jpg" alt=""></div>
                                <h4>
                                    <a href="#">Christopher Daniel</a>
                                    <span>MD of Nicolos</span>
                                </h4>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="testimonial_main">
                                <p class="mar-bottom-30">
                                    From the first meeting to handover, the coordination and transparency were outstanding. They maintained safety and quality without any compromise throughout our project.
                                </p>
                                <div class="client-pic"><img src="<?php echo $base_path; ?>images/testimonial/testimonial_2.jpg" alt=""></div>
                                <h4>
                                    <a href="#">John Wakson</a>
                                    <span>CEO Of Micro group</span>
                                </h4>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="testimonial_main">
                                <p class="mar-bottom-30">
                                    The fabrication and erection work was precise and neat. Hammerbeam's site team communicated clearly at every stage and ensured a seamless workflow with other contractors.
                                </p>
                                <div class="client-pic"><img src="<?php echo $base_path; ?>images/testimonial/testimonial_3.jpg" alt=""></div>
                                <h4>
                                    <a href="#">Tim Loran</a>
                                    <span>CEO Of Tim Lake</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="testimonial_main">
                                <p class="mar-bottom-30">
                                    We highly recommend Hammerbeam Contracting for any structural steel works. Their engineering understanding and commitment to deadlines make them a reliable partner.
                                </p>
                                <div class="client-pic"><img src="<?php echo $base_path; ?>images/testimonial/testimonial_4.jpg" alt=""></div>
                                <h4>
                                    <a href="#">John Wakson</a>
                                    <span>CEO Of Micro group</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--* EndTestimonial*-->