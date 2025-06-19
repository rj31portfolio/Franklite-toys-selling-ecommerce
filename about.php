<?php include 'database/config.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
    


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link of CSS Files -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/scrollCue.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">

    <title> E Commerce</title>
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/images/favicon.png">
</head>

    <body>
        <!--====== PRELOADER PART START ======-->
       <?php include_once 'componant/preloader.php'; ?>
        <!--====== PRELOADER PART ENDS ======-->

        <!-- Start Top Header Area -->
        <?php include_once 'inc/header.php'; ?>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <?php include_once 'inc/nav.php'; ?>
        <!-- End Navbar Area -->
        
       <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content text-center" data-cues="slideInUp" data-group="pageTitleContent">
                    <h1>
                        About Us
                    </h1>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="position-relative">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="position-relative">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start About Area -->
<div class="about-area ptb-125">
    <div class="container">
        <div class="row align-items-center" data-cues="slideInUp" data-group="aboutContent">
            <div class="col-lg-6 col-md-12">
                <div class="about-image position-relative">
                    <img src="assets/images/border-shape.png" alt="about-image">
                    <img src="assets/images/about.jpg" alt="about-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="title position-relative">
                        <img src="assets/images/cloud2.png" alt="cloud">
                        <span class="d-block">
                            About Us
                        </span>
                    </div>
                    <h2>Nippon Toys Industries – Trusted Toy Manufacturer in Delhi</h2>
                    <p>With 3.9★ ratings from over 1,900 Google reviews, Nippon Toys Industries is a leading toy manufacturer based in Delhi. We are committed to delivering quality, creativity, and joy through our wide range of children’s toys.</p>
                    <ul class="features-list ps-0 mb-0 list-unstyled">
                        <li class="position-relative">
                            <img src="assets/images/icons/icon12.png" alt="icon">
                            <p>
                                <strong>Innovative Toy Designs</strong>
                                Our team constantly develops fun, safe, and imaginative products that spark creativity in every child.
                            </p>
                        </li>
                        <li class="position-relative">
                            <img src="assets/images/icons/icon13.png" alt="icon">
                            <p>
                                <strong>Quality & Trust</strong>
                                With a strong presence in the toy industry, we prioritize product safety, durability, and customer satisfaction.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->


         <!-- Start More Than Shop Area -->
        <div class="more-that-shop-area pb-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="mb-0">
                        <span class="position-relative">
                            More than Shop
                        </span>
                    </h2>
                </div>
                <div class="row justify-content-center" data-cues="slideInUp" data-group="moreContent">
                    <div class="col-lg-3 col-6">
                        <div class="more-than-shop-box text-center">
                            <img src="assets/images/beach-ball.png" alt="beach-ball">
                            <h3 class="mb-0 fw-semibold">
                                The best quality 100% ingredients
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="more-than-shop-box text-center">
                            <img src="assets/images/abc-block.png" alt="beach-ball">
                            <h3 class="mb-0 fw-semibold">
                                Sterile packaging for the highest value
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="more-than-shop-box text-center">
                            <img src="assets/images/jigsaw.png" alt="beach-ball">
                            <h3 class="mb-0 fw-semibold">
                                Flavor of quality products to choose from
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="more-than-shop-box text-center">
                            <img src="assets/images/duck.png" alt="beach-ball">
                            <h3 class="mb-0 fw-semibold">
                                We care about the health and proper development
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End More Than Shop Area -->

         <!-- Start Feedback Area -->
        <div class="feedback-area">
            <div class="container">
                <div class="content position-relative" data-cue="slideInUp">
                    <div class="box text-center">
                        <img src="assets/images/quote.png" alt="quote-image">
                        <p>
                            We aim to give our customers 100% quality products 
                        </p>
                        <span class="d-block">Andrew Hadison</span>
                    </div>
                    <img src="assets/images/big-cloud.png" alt="cloud-image">
                </div>
            </div>
        </div>
        <!-- End Feedback Area -->

        <!-- Start Team Area -->
        <div class="team-area pt-125 pb-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="mb-0">
                        <span class="position-relative">
                            Our Executive Team
                        </span>
                    </h2>
                </div>
                <div class="row justify-content-center" data-cues="slideInUp" data-group="teamContent">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-team-member text-center position-relative">
                            <img src="assets/images/teams/border.png" alt="border-image">
                            <div class="content">
                                <img src="assets/images/teams/member1.jpg" alt="member-image">
                                <h3>
                                    Eleanor Amelia
                                </h3>
                                <span class="block">
                                    Executive
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-team-member text-center position-relative">
                            <img src="assets/images/teams/border.png" alt="border-image">
                            <div class="content">
                                <img src="assets/images/teams/member2.jpg" alt="member-image">
                                <h3>
                                    Henry Hardisk
                                </h3>
                                <span class="block">
                                    Marketing
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-team-member text-center position-relative">
                            <img src="assets/images/teams/border.png" alt="border-image">
                            <div class="content">
                                <img src="assets/images/teams/member3.jpg" alt="member-image">
                                <h3>
                                    Olivia Sophia
                                </h3>
                                <span class="block">
                                    Distribution
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-team-member text-center position-relative">
                            <img src="assets/images/teams/border.png" alt="border-image">
                            <div class="content">
                                <img src="assets/images/teams/member4.jpg" alt="member-image">
                                <h3>
                                    Jack John
                                </h3>
                                <span class="block">
                                    Analysis
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->

        <!-- Start Brands Area -->
        <div class="brands-area ptb-125">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="mb-0">
                        <span class="position-relative">
                            Our Golden Brands
                        </span>
                    </h2>
                </div>
                <div class="row" data-cues="slideInUp" data-group="brandsContent">
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="brand-item border-0 two text-center">
                            <a href="shop-grid.html" class="d-block">
                                <img src="assets/images/brands/brand1.png" alt="brand-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="brand-item border-0 two text-center">
                            <a href="shop-grid.html" class="d-block">
                                <img src="assets/images/brands/brand2.png" alt="brand-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="brand-item border-0 two text-center">
                            <a href="shop-grid.html" class="d-block">
                                <img src="assets/images/brands/brand3.png" alt="brand-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 col-md-3">
                        <div class="brand-item border-0 two text-center">
                            <a href="shop-grid.html" class="d-block">
                                <img src="assets/images/brands/brand4.png" alt="brand-image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Footer Area -->
      <?php   include_once 'inc/footer.php'; ?>
        <!-- Footer Area end -->
        
       