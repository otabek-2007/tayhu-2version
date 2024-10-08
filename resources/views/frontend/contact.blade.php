@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="contact_link" /></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Contact Section Start -->
<section id="page" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title text-left">
                    <h2><x-translation key="contact_us_link" /></h2>
                    <h5><x-translation key="get_touch" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="form-container-box">
                    <form class="contact-form form" id="ajax-contact" method="post" action="assets/s/contact.php">
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required="required" data-error="name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="required" data-error="valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" rows="10" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="theme-button-dark" data-text="Send Message"><x-translation key="send_message" /><span></span></button>
                                </div>
                                <div class="messages">
                                    <div class="alert alert alert-success alert-dismissable alert-dismissable hidden" id="msgSubmit"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Thank You! your message has been sent. </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="contact-widget">
                    <div class="contact-info">
                        <h6 class="mb-2"><x-translation key="address" /></h6>
                        <p><i class="fa fa-map"></i> <x-translation key="long_location" /></p>
                        <p><a href="https://www.google.com/maps/place/Tayhu/@41.3889256,69.2801609,653m/data=!3m2!1e3!4b1!4m6!3m5!1s0x38ae8d4eb3c71ab7:0x29734a4e8feeaa44!8m2!3d41.3889256!4d69.2827358!16s%2Fg%2F11pc4ryj7p?entry=ttu&g_ep=EgoyMDI0MDkyNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Get Directions</a></p>
                    </div>


                    <div class="contact-info">
                        <h6 class="mb-2"><x-translation key="phone" /></h6>
                        <p><i class="fa fa-phone"></i> <a href="tel:+998712236508">+998 71 223 65 08</a></p>
                        <p><i class="fa fa-phone"></i> <a href="tel:+998988888812">+998 98 888 88 12</a></p>
                    </div>
                    <div class="contact-info">
                        <h6 class="mb-2"><x-translation key="email" /></h6>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:spektrstar@tayhu.uz">spektrstar@tayhu.uz</a></p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:beelindafloor@tayhu.uz">beelindafloor@tayhu.uz</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Start -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.871999569018!2d69.28059018876664!3d41.389075980124055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIzJzIwLjciTiA2OcKwMTYnNTcuOCJF!5e0!3m2!1sen!2s!4v1603904838884!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 390px; margin-bottom: -10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<!-- Map Section End -->
@endsection