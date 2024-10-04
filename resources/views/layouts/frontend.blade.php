<!DOCTYPE html>
<html html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Tayhu &#8211; Comfort &amp; Elegance</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="ZR Themes">
    <meta name="description" content="BuildZone - Construction Building HTML Template">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo-title.png">
    <!-- Site All Style Sheet Css -->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/stylesheets/swiper.min.css" rel="stylesheet">
    <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/stylesheets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/stylesheets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/stylesheets/animate.min.css" rel="stylesheet">
    <link href="assets/stylesheets/magnific-popup.css" rel="stylesheet">
    <!-- Site Main Style Sheet Css -->
    <link href="assets/stylesheets/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="../../../css2-1?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="../../../css2-2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/main.css">

</head>

<body>

    <!-- Start Page Preloader Area -->
    <div class="preloader" id="kar-theme-preloader">
        <div class="preloader-wapper">
            <div>
                <div class="spinner-loader">
                    <img src="assets/images/loader.svg" alt="laoder">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader Area -->

    @include('components.frontend.header')
    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html" class="logo d-flex align-items-center">
                                    <img src="assets/images/tayhu-logo.png" class="white-logo" alt="logo">
                                </a>
                            </div>
                            <div class="footer-text">
                                <p>The journey from concept to completion in the world of construction is a fascinating
                                    dance between the architect's vision, the builder's expertise, and the building
                                    itself.</p>
                            </div>

                            <div class="footer-social-icon">
                                <a href="#"><i class="fa-brands fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fa-brands fa-telegram"></i></a>
                                <a href="#"><i class="fa-brands fa-google google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                                

                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-50">
                                    <ul>
                                        <li><a href="about.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>About Us</a></li>
                                        <li><a href="projects.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Projects</a></li>
                                        <li><a href="plans.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Pricing</a></li>
                                        <li><a href="blogs.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Blogs</a></li>
                                        <li><a href="team.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Team</a></li>
                                        <li><a href="contact.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-50">
                                    <ul>
                                        <li><a href="service-details.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Services</a></li>
                                        <li><a href="service-details.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Paiting</a></li>
                                        <li><a href="service-details.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Cleaning</a></li>
                                        <li><a href="service-details.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Plumbing</a></li>
                                        <li><a href="service-details.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Architects</a></li>
                                        <li><a href="contact.html"><i class="fa fa-angle-double-right"
                                                    aria-hidden="true"></i>Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading"> <!-- cart mini area start -->
                                <div class="cartmini__area">
                                    <div class="cartmini__wrapper d-flex justify-content-between flex-column">
                                        <div class="cartmini__top-wrapper">
                                            <div class="cartmini__top p-relative">
                                                <div class="cartmini__top-title">
                                                    <h4>Shopping cart</h4>
                                                </div>
                                                <div class="cartmini__close">
                                                    <button type="button"
                                                        class="cartmini__close-btn cartmini-close-btn"><i
                                                            class="fal fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="cartmini__shipping">
                                                <p> Free Shipping for all orders over <span>$50</span></p>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                        role="progressbar" data-width="70%" aria-valuenow="70"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="cartmini__widget">
                                                <div class="cartmini__widget-item">
                                                    <div class="cartmini__thumb">
                                                        <a href="shop-details.html">
                                                            <img src="assets/images/product/rc-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cartmini__content">
                                                        <h5 class="cartmini__title"><a href="shop-details.html">Level
                                                                Bolt Smart Lock</a></h5>
                                                        <div class="cartmini__price-wrapper">
                                                            <span class="cartmini__price">$46.00</span>
                                                            <span class="cartmini__quantity">x2</span>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="cartmini__del"><i
                                                            class="fa-regular fa-xmark"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cartmini__checkout">
                                            <div class="cartmini__checkout-title mb-30">
                                                <h4>Subtotal:</h4>
                                                <span>$113.00</span>
                                            </div>
                                            <div class="cartmini__checkout-btn">
                                                <a href="cart.html" class="tp-btn-black text-center mb-10 w-100"> view
                                                    cart</a>
                                                <a href="checkout.html" class="tp-btn-black text-center w-100">
                                                    checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- cart mini area end -->
                                <h3>Contact</h3>
                            </div>
                            <div class="contact-info">
                                <h6>Address:</h6>
                                <p><i class="fa fa-map"></i> Karvan Yuli Street, Tashkent</p>
                            </div>
                            <div class="contact-info">
                                <h6>Phone:</h6>
                                <p><i class="fa fa-phone"></i> <a href="tel:+998712236508">+998 71 223 65 08</a></p>
                                <p><i class="fa fa-phone"></i> <a href="tel:+998988888812">+998 98 888 88 12</a></p>
                            </div>

                            <div class="contact-info">
                                <h6>Email:</h6>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:spektrstar@tayhu.uz">spektrstar@tayhu.uz</a></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-6 mb-50">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-left text-lg-left">
                        <div class="copyright-text">
                            <p>2024 © <a href="https://dora.uz/" target="_blank"
                                    style="text-decoration: underline !important;">DORA System</a>. All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to Top Start -->
    <div class="back-to-top">
        <i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
    </div>
    <!-- Back to Top End -->

    <!-- Site All Jquery Js -->
    <script src="assets/javascript/jquery-3.5.1.min.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/plugins.js"></script>
    <script src="assets/javascript/swiper.min.js"></script>
    <script src="assets/javascript/wow.min.js"></script>
    <script src="assets/javascript/validator.min.js"></script>
    <script src="assets/javascript/contact.js"></script>
    <script src="assets/javascript/main.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>