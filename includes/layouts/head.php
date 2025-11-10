<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Hammerbeam Contracting LLC | Structural Steel Fabrication & Erection in UAE</title>
    <meta name="description" content="Hammerbeam Contracting LLC delivers high-precision structural steel fabrication, erection and turnkey contracting services across the UAE, focused on safety, quality and timely delivery.">
    <meta name="keywords" content="structural steel, steel erection, steel fabrication UAE, contracting company UAE, industrial steel works, construction steel works, Hammerbeam Contracting">
    <meta name="author" content="Hammerbeam Contracting LLC">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Hammerbeam Contracting LLC | Structural Steel Specialists in UAE">
    <meta property="og:description" content="Trusted partner for industrial and commercial steel structures — fabrication, erection & turnkey contracting.">
    <meta property="og:url" content="https://hammerbeamcontracting.com/">
    <meta property="og:site_name" content="Hammerbeam Contracting LLC">
    <meta property="og:image" content="https://hammerbeamcontracting.com/images/c-logo.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hammerbeam Contracting LLC | Structural Steel Experts">
    <meta name="twitter:description" content="Precision-led structural steel fabrication & erection services across the UAE.">
    <meta name="twitter:image" content="https://hammerbeamcontracting.com/images/c-logo.png">

    <!-- Mobile + Browser essentials -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php
// Calculate base path based on where this file is included from
// Determine if we're in a subdirectory (like services/)
$script_path = $_SERVER['SCRIPT_NAME'];
$script_dir = dirname($script_path);

// Normalize the path (handle both forward and backslashes)
$script_dir = str_replace('\\', '/', $script_dir);
$script_dir = trim($script_dir, '/');

// If script is in root, base_path is empty, otherwise it's '../' for each level
$base_path = '';
if (!empty($script_dir) && $script_dir != '.' && $script_dir != '/') {
    // Count the number of directory levels
    $depth = substr_count($script_dir, '/') + 1;
    $base_path = str_repeat('../', $depth);
}
?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_path; ?>images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="<?php echo $base_path; ?>css/default.css" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="<?php echo $base_path; ?>css/style.css" rel="stylesheet" type="text/css">

    <!--Blog CSS-->
    <link href="<?php echo $base_path; ?>css/blog.css" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="<?php echo $base_path; ?>css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link href="<?php echo $base_path; ?>css/font-awesome.css" rel="stylesheet" type="text/css">
</head>