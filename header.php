<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Brainvave Software Studios</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.min.css?v=3">
    <link rel="stylesheet" href="css/boxicons/css/boxicons.min.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/favicon/site.webmanifest">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="./">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="<?php echo $current_page == 'index.php' ? 'current' : ''; ?>">
                        <a class="<?php echo $current_page == 'index.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'index.php' ? '#home' : 'index.php#home'; ?>" title="home">Home</a>
                    </li>
                    <li class="<?php echo $current_page == 'about.php' ? 'current' : ''; ?>">
                        <a class="<?php echo $current_page == 'about.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'about.php' ? '#about' : 'about.php'; ?>" title="about">About</a>
                    </li>
                    <li class="<?php echo $current_page == 'projects.php' ? 'current' : ''; ?>">
                        <a href="projects.php" title="projects">Projects</a>
                    </li>
                    <li>
                        <a class="<?php echo $current_page == 'index.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'index.php' ? '#services' : 'index.php#services'; ?>" title="services">Services</a>
                    </li>
                    <li>
                        <a class="<?php echo $current_page == 'index.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'index.php' ? '#works' : 'index.php#works'; ?>" title="works">Works</a>
                    </li>
                    <li>
                        <a class="<?php echo $current_page == 'index.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'index.php' ? '#clients' : 'index.php#clients'; ?>" title="clients">Clients</a>
                    </li>
                    <li>
                        <a class="<?php echo $current_page == 'index.php' ? 'smoothscroll' : ''; ?>" href="<?php echo $current_page == 'index.php' ? '#contact' : 'index.php#contact'; ?>" title="contact">Contact</a>
                    </li>
                </ul>
    
                <p>Our vision is to pioneer innovative technology solutions that transform industries and enhance user experiences. We're driven by a commitment to excellence, collaboration, and continuous innovation, aiming to leave a lasting impact on the digital world.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.linkedin.com/company/brainvave-software-studios/"><i class='bx bxl-linkedin-square' ></i></a>
                    </li>
                    <li>
                        <a href="mailto:hello@brainvave.com"><i class='bx bxl-gmail' ></i></a>
                    </li>
                    <li>
                        <a href="https://wa.me/94741175199"><i class='bx bxl-whatsapp' ></i></i></a>
                    </li>
                    <li>
                        <a href="tel:+94741175199"><i class='bx bx-phone' ></i></a>
                    </li>
                    <li>
                        <a href="sms:+94741175199?&body=Hey%20I%20like%20to%20build%20a%20website."><i class='bx bx-message-rounded-dots'></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->
