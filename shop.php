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

    <title> Shop</title>
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/images/favicon.png">
</head>
    <body>
           <!--====== PRELOADER PART START ======-->
       <?php include_once 'componant/preloader.php'; ?>
        <!--====== PRELOADER PART ENDS ======-->

        <!-- Start Top Header Area -->
        <?php include_once 'inc/header2.php'; ?>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
         <?php include_once 'inc/nav.php'; ?>
        <!-- End Navbar Area -->
        
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content text-center" data-cues="slideInUp" data-group="pageTitleContent">
                    <h1>
                        Products
                    </h1>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="position-relative">
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="position-relative">
                            Products
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Products Area -->
        <div class="products-area ptb-125">
            <div class="container">
                <div class="row" data-cues="slideInUp" data-group="productsContent">
                    <div class="col-lg-3 col-md-12 order-2 order-lg-1">
                        <div class="products-sidebar-area">
                            <div class="sidebar-price-box">
                                <h3>Price</h3>
                                <div class="price-range-slider">
                                    <div id="slider-range" class="range-bar"></div>
                                    <p class="range-value">
                                        Range: 
                                        <input type="text" id="amount" readonly>
                                    </p>
                                </div>
                            </div>
                            <div class="sidebar-categories-box">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="shop-grid.html">Diaper <span class="count">3</span></a></li>
                                    <li><a href="shop-grid.html">Accessoris <span class="count">3</span></a></li>
                                    <li><a href="shop-grid.html">KidsFashion <span class="count">2</span></a></li>
                                    <li><a href="shop-grid.html">Toy <span class="count">2</span></a></li>
                                    <li><a href="shop-grid.html">Kids Shoe <span class="count">2</span></a></li>
                                    <li><a href="shop-grid.html">Cosmetics <span class="count">1</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-popular-box">
                                <h3>Popular Products</h3>
                                <div class="box d-flex align-items-center">
                                    <div class="image">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product29.png" alt="product-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">
                                                Frosted Flakes
                                            </a>
                                        </h4>
                                        <div class="price">
                                            $21.00 
                                        </div>
                                    </div>
                                </div>
                                <div class="box d-flex align-items-center">
                                    <div class="image">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product30.png" alt="product-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">
                                                Kids Dress
                                            </a>
                                        </h4>
                                        <div class="price">
                                            $21.00 
                                        </div>
                                    </div>
                                </div>
                                <div class="box d-flex align-items-center">
                                    <div class="image">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product31.png" alt="product-image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">
                                                Organic Peanuts
                                            </a>
                                        </h4>
                                        <div class="price">
                                            $21.00 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-brands-box">
                                <h3>Brands</h3>
                                <a href="shop-grid.html" class="d-inline-block">
                                    <img src="assets/images/brands/brand3.png" alt="brands-image">
                                </a>
                                <a href="shop-grid.html" class="d-inline-block">
                                    <img src="assets/images/brands/brand1.png" alt="brands-image">
                                </a>
                                <a href="shop-grid.html" class="d-inline-block">
                                    <img src="assets/images/brands/brand2.png" alt="brands-image">
                                </a>
                                <a href="shop-grid.html" class="d-inline-block">
                                    <img src="assets/images/brands/brand4.png" alt="brands-image">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 order-1 order-lg-2">
                        <div class="kidsmart-grid-sorting row align-items-center">
                            <div class="col-xl-6 col-md-4 result-count">
                                <p>Showing 1–12 of <span class="count">78</span> results</p>
                            </div>
                            <div class="col-xl-6 col-md-8 ordering">
                                <div class="products-filter">
                                    <div class="d-flex align-items-center">
                                        <span>View:</span> 
                                        <button type="button" class="active grid-view p-0 border-0 bg-transparent">
                                            <i class="fa-solid fa-table-cells-large"></i>
                                        </button>
                                        <button type="button" class="list-view p-0 border-0 bg-transparent">
                                            <i class="fa-solid fa-table-list"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select class="form-select">
                                        <option selected>Default</option>
                                        <option value="1">Popularity</option>
                                        <option value="2">Latest</option>
                                        <option value="3">Price: low to high</option>
                                        <option value="4">Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" id="products-filter-options">
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product1.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="hot">
                                            Hot
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Frosted Flakes
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product2.jpg" alt="product-image">
                                        </a>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Tiffin Box
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product3.jpg" alt="product-image">
                                        </a>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Kids Chair
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product4.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Tiffin Snacks
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product5.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="hot">
                                            Hot
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Pumpkin Spinach
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product6.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="hot">
                                            Hot
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Kids Dress
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product7.jpg" alt="product-image">
                                        </a>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Cereoland Fruit
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product8.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="hot">
                                            Hot
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Teddybear Doll
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="single-product-item text-center">
                                    <div class="image position-relative">
                                        <a href="product-details.html" class="d-block">
                                            <img src="assets/images/products/product23.jpg" alt="product-image">
                                        </a>
                                        <div class="discount">
                                            -25%
                                        </div>
                                        <div class="hot">
                                            Hot
                                        </div>
                                        <div class="buttons-list d-flex align-items-center justify-content-center">
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-solid fa-basket-shopping"></i>
                                            </button>
                                            <button type="button" class="d-inline-block">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <a href="#" class="d-inline-block" data-bs-toggle="modal" data-bs-target="#productQuickViewModal">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h3>
                                            <a href="product-details.html">
                                                Pumpkin Spinach
                                            </a>
                                        </h3>
                                        <div class="price">
                                            $21.00 - $50
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Area -->

          <!-- Start Footer Area -->
      <?php   include_once 'inc/footer.php'; ?>
        <!-- Footer Area end -->