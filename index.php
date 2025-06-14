
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
        
        <!-- Start Mega Kids Banner Area -->
        <?php include_once 'componant/kidsbanner.php'; ?>
        <!-- End Mega Kids Banner Area -->

        <!-- Start Features Area -->
        <?php include_once 'componant/features.php'; ?>
        <!-- End Features Area -->

        <!-- Start Featured Categories Area -->
       <?php include_once 'componant/featurecategories.php'; ?>
        <!-- End Featured Categories Area -->

        <!-- Start Featured Products Area -->
       <?php include_once 'componant/feature-products.php'; ?>
        <!-- End Featured Products Area -->

        <!-- Start Categories Area -->
       <?php include_once 'componant/categories.php'; ?>
        <!-- End Categories Area -->

        <!-- Start Offer Area -->
       
        <!-- End Offer Area -->

        <!-- Start Most Popular & Top Rated Products Area -->
        
        <!-- End Most Popular & Top Rated Products Area -->

        <!-- Start Brands Area -->
    
        <!-- End Brands Area -->

        <!-- Start Product Quickview Modal -->
              
        <!-- End Product Quickview Modal -->

        <!-- Start Footer Area -->
      <?php   include_once 'inc/footer.php'; ?>
        <!-- Footer Area end -->
        
       