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
                        Contact Us
                    </h1>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="position-relative">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="position-relative">
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Info Area -->
        <div class="contact-info-area pt-125 pb-100">
            <div class="container">
                <div class="row justify-content-center" data-cues="slideInUp" data-group="contactContent">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-box position-relative">
                            <img src="assets/images/icons/icon9.png" alt="icon">
                            <p>
                                <strong>
                                    1901 Thornridge Cir. Shiloh, Hawaii 81063
                                </strong>
                            </p>
                            <span class="d-block">
                                Monday – Friday: 9:00-20:00
                            </span>
                            <span class="d-block">
                                Saturady: 11:00 – 15:00
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-box position-relative">
                            <img src="assets/images/icons/icon10.png" alt="icon">
                            <div class="box">
                                <span class="d-block">
                                    Mail 1
                                </span>
                                <a href="mailto:info@company.com">
                                    info@company.com
                                </a>
                            </div>
                            <div class="box">
                                <span class="d-block">
                                    Mail 2
                                </span>
                                <a href="mailto:info@company2.com">
                                    info@company2.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-info-box position-relative">
                            <img src="assets/images/icons/icon11.png" alt="icon">
                            <div class="box">
                                <span class="d-block">
                                    Number 1
                                </span>
                                <a href="tel:(406)5550120">
                                    (406) 555-0120
                                </a>
                            </div>
                            <div class="box">
                                <span class="d-block">
                                    Number 2
                                </span>
                                <a href="tel:(480)5550103">
                                    (480) 555-0103
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->

        <!-- Start Contact Area -->
        <div class="contact-area pb-125">
            <div class="container">
                <div class="row" data-cues="slideInUp" data-group="formContent">
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message" class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn d-block w-100">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96873.74833064685!2d-74.02739776241977!3d40.64521471554788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25c7b17750973%3A0xc8c5384fddf19cc0!2sWeeksville%20Heritage%20Center!5e0!3m2!1sen!2sbd!4v1694533886005!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Footer Area -->
      <?php   include_once 'inc/footer.php'; ?>
        <!-- Footer Area end -->
        
       