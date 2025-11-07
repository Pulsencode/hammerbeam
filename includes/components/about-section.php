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
                        <a href="<?php echo $base_path; ?>services.php" class="btn mt_btn_yellow">Our Services</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 wow slideInDown">
                    <div class="about-img">
                        <img src="<?php echo $base_path; ?>images/project/bw12.jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->