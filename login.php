
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
                        My Account
                    </h1>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="position-relative">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="position-relative">
                            My Account
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
<!-- Start Login Area Only -->
<div class="profile-authentication-area ptb-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username or email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="default-btn d-block w-100">
                            Login
                        </button>
                        <div class="row align-items-center mt-3">
                            <div class="col-6 remember-me-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 forgot-your-password-wrap text-end">
                                <a href="forgot-password.html">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Area Only -->


          <!-- Start Footer Area -->
      <?php   include_once 'inc/footer.php'; ?>
        <!-- Footer Area end -->