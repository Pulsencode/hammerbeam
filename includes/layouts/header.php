<!--*Header*-->
<header id="inner-navigation">

    <!-- top bar -->
    <!-- <div class="topbar-section">
        <div style="margin-left: 40px; margin-right: 40px;">
            <div class="topbar-inner">
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                        <li><i class="fa fa-envelope"></i> Email: info@hammerbeamcontracting.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <!-- navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

        <div style="margin-left: 40px; margin-right: 40px;">

<?php
// Calculate base path for header
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
            <div class="logo pull-left">
                <a href="<?php echo $base_path; ?>index.php"><img src="<?php echo $base_path; ?>images/c-logo.png" alt=""></a>
            </div>

            <div id="navbar" class="navbar-nav-wrapper pull-right">
                <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                    <li class="active">
                        <a href="<?php echo $base_path; ?>index.php">Home <i class="fa"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $base_path; ?>about.php">About Us<i class="fa"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $base_path; ?>services.php">Services<i class="fa"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $base_path; ?>contact.php">Contact Us<i class="fa"></i></a>
                    </li>
                    <li>
                        <a href="tel:+971501234567" id="custom-cta-btn">Call Us Now!</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
        <div id="slicknav-mobile"></div>
    </nav>
    <!-- navbar end -->
</header>
<!--* End Header*-->