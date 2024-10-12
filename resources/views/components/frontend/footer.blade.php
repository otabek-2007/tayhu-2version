<?php
$lang = app()->getLocale();
?>

<footer class="footer-section style-radius bg-cover bg-cover"
    style="background-image: url('assets/img/footer/bg.jpg'); bottom:0px;">
    <div class="container">
        <div class="contact-info-area">
            <a href="/" class="wow fadeInUp" data-wow-delay=".2s">
                <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" alt="img" style="width:200px; height:70px;">
            </a>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                </div>
                <div class="content">
                    <p>Office location</p>
                    <h3>
                        {{ $site->getTranslatedAttribute('location_1', $lang) }}
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="content">
                    <p>send email</p>
                    <h3>
                        <a href="mailto:
                                        {{ $site->email_1 }}">
                            {{ $site->email_1 }}</a>
                    </h3>
                </div>
            </div>
            <div class="contact-info-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="content">
                    <p>call emergency</p>
                    <h3>
                        <a href="tel:{{ $site->phone_1 }}">{{ $site->phone_1 }}</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <!-- <div class="widget-head">
                                            <h5>About Company</h5>
                                        </div> -->
                        <div class="footer-content">
                            <p>
                                <x-translation key="footer_text" />
                            </p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5><x-translation key="quick_link" /></h5>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="/about">
                                    <i class="fa-solid fa-angles-right"></i>
                                    <x-translation key="about_link" />
                                </a>
                            </li>
                            <li>
                                <a href="/contact">
                                    <i class="fa-solid fa-angles-right"></i>
                                    <x-translation key="contact_us_link" />
                                </a>
                            </li>
                            <li>
                                <a href="/showroom">
                                    <i class="fa-solid fa-angles-right"></i>
                                    <x-translation key="showroom_link" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5 style="opacity: 0;">Our Services</h5>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="/projects">
                                    <i class="fa-solid fa-angles-right"></i>
                                    
                                    <x-translation key="Our_Gallery" />

                                </a>
                            </li>
                            <li>
                                <a href="/catalog">
                                    <i class="fa-solid fa-angles-right"></i>
                                    Our Products
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>Instagram</h5>
                        </div>
                        <div class="footer-gallery">
                            <div class="gallery-wrap">
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-1.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-1.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-2.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-2.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-3.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-3.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery-item">
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-4.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-4.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-5.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-5.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="/assets/img/footer/gallery-6.jpg" class="img-popup">
                                            <img src="/assets/img/footer/gallery-6.jpg" alt="gallery-img">
                                            <div class="icon">
                                                <i class="far fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>2024 © <a href="https://dora.uz/">DORA System</a> All rights reserved</p>
        </div>
    </div>
</footer>