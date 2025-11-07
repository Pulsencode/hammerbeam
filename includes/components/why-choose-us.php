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
<!--* Choose Us*-->
<section id="choose_us" class="about_choose_us">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <!-- section title -->
                <div class="section_heading">
                    <h2 class="section_title">
                        <span>Why Choose us?</span>
                    </h2>
                    <p class="heading_txt">We don't just build structures we build trust, reliability, and long-term
                        partnerships through safety-driven and results-focused steel construction solutions.</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-5 col-sm-12 col-xs-12 mission-image">
                <img src="<?php echo $base_path; ?>images/why-us.jpg" alt="mission-image">
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 mission-list">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <h3>Team of Professionals</h3>
                            <p>Certified experts delivering precision and reliability in every project.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <h3>Commitment to Safety</h3>
                            <p>Strict adherence to international safety standards on every site.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <h3>Precision & Quality</h3>
                            <p>Superior craftsmanship backed by modern tools and inspections.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list mar-bottom-30">
                            <h3>Timely Delivery</h3>
                            <p>Efficient planning ensures projects are completed right on schedule.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list">
                            <h3>Advanced Equipment & Techniques</h3>
                            <p>Modern cranes and machinery for safe, efficient steel erection.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="choose-list">
                            <h3>Client-Focused Approach</h3>
                            <p>Clear communication and lasting client relationships.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End choose us*-->