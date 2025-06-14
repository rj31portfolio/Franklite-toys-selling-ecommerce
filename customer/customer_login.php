<?php
session_start();
include("includes/db.php"); // Your DB connection file
include("functions/functions.php"); // If you use getRealUserIp()

// Secure login logic (basic version; recommend hashing in production)
if (isset($_POST['login'])) {
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];

    $select_customer = "SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";
    $run_customer = mysqli_query($con, $select_customer);
    $check_customer = mysqli_num_rows($run_customer);

    $get_ip = getRealUserIp();
    $select_cart = "SELECT * FROM cart WHERE ip_add='$get_ip'";
    $run_cart = mysqli_query($con, $select_cart);
    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {
        echo "<script>alert('Email or password is incorrect.')</script>";
        exit();
    }

    $_SESSION['customer_email'] = $customer_email;
    echo "<script>alert('You are Logged In')</script>";

    if ($check_cart == 0) {
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    } else {
        echo "<script>window.open('checkout.php','_self')</script>";
    }
}
?>

<!-- Start Profile Authentication Area -->
<div class="profile-authentication-area ptb-125">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Login Form -->
            <div class="col-lg-6 col-md-8">
                <div class="login-form">
                    <h2>Login</h2>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" name="c_email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="c_pass" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" name="login" value="Login" class="default-btn d-block w-100">
                            Login
                        </button>
                        <div class="row align-items-center mt-3">
                            <div class="col-6 remember-me-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="forgot_pass.php">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Profile Authentication Area -->
