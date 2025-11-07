<?php
// Calculate base path for footer
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
<!--*Footer*-->
<footer id="mt_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="follow_us">
                    <a href="<?php echo $base_path; ?>index.php">
                        <img src="<?php echo $base_path; ?>images/c-logo.png" alt="Logo">
                    </a>
                    <p> HammerBeam Contracting LLC delivers safe, efficient, and reliable steel erection and
                        construction solutions across the region.
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="mt_contact_ftr">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="<?php echo $base_path; ?>index.php"><i class="fa fa-angle-right"></i>Home</a></li>
                        <li><a href="<?php echo $base_path; ?>about.php"><i class="fa fa-angle-right"></i>About Us</a></li>
                        <!-- <li><a href="<?php echo $base_path; ?>services.php"><i class="fa fa-angle-right"></i>Services</a></li> -->
                        <li><a href="<?php echo $base_path; ?>contact.php"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="mt_contact_ftr">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo $base_path; ?>services/structural-steel-erection.php"><i class="fa fa-angle-right"></i>Structural Steel Erection</a></li>
                        <li><a href="<?php echo $base_path; ?>services/structural-steel-erection.php"><i class="fa fa-angle-right" style="margin-left: 30px;"></i>Hot Rolled Steel Structures </a></li>
                        <li><a href="<?php echo $base_path; ?>services/structural-steel-erection.php"><i class="fa fa-angle-right" style="margin-left: 30px;"></i>Pre-Engineered Steel Buildings </a></li>
                        <li><a href="<?php echo $base_path; ?>services/cladding.php"><i class="fa fa-angle-right"></i>Cladding</a></li>
                        <li><a href="<?php echo $base_path; ?>services/cladding.php"><i class="fa fa-angle-right" style="margin-left: 30px;"></i>Single Skin and Sandwich Panel</a></li>
                        <li><a href="<?php echo $base_path; ?>services/cladding.php"><i class="fa fa-angle-right" style="margin-left: 30px;"></i>Decking</a></li>
                        <li><a href="<?php echo $base_path; ?>services/cladding.php"><i class="fa fa-angle-right" style="margin-left: 30px;"></i>Standing Seam</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mt_footer_copy">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copy_txt">
                        <p>&copy; Copyright 2025 - HammerBeam Contracting LLC All rights Reserved</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="copy_txt">
                        <ul class="pull-right">
                            <p>Developed by <a href="https://www.pulsencode.com/" style="color: white;">Pulsencode</a>
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--* End Footer*-->