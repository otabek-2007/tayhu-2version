@extends('layouts.frontend')
@section('content')
    <div class="single-page">
        <div class="container">
            <nav aria-label="breadcrumb single-page">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project Description</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Page Section Start -->
    <div id="page" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-left">
                        <h2>Project Description</h2>
                        <h5>Construction brings the architect's vision to life</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="assets/images/single-project-1.jpg" alt="image">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <img src="assets/images/single-project-2.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="assets/images/single-project-3.jpg" alt="image">
                        </div>
                    </div>
                    <p>Construction brings the architect's vision to life. It's the physical manifestation of the blueprint, where skilled workers and advanced machinery transform theoretical plans into tangible structures. From laying the foundation to raising the walls and installing intricate details, construction teams breathe life into architectural dreams.</p>
                    <br>
                    <p>You can try our web hosting services in World Wide at zero-cost and completely risk-free for 30 days, with no obligations whatsoever.</p>
                    <h3>Project Features:</h3>
                    <ul class="content-listing">
                        <li><i class="fa fa-caret-right"></i>Project management</li>
                        <li><i class="fa fa-caret-right"></i>Safety</li>
                        <li><i class="fa fa-caret-right"></i>Skilled labor</li>
                        <li><i class="fa fa-caret-right"></i>Heavy machinery</li>
                        <li><i class="fa fa-caret-right"></i>Quality control</li>
                    </ul>

                </div>
                <!-- Start Pricing Section -->
                <div class="col-lg-5 col-md-5 price-item">
                    <div class="pricing-content">
                        <div class="price-heading">
                            <div class="price-name">
                                <h3>Project Value</h3>
                                <h2><span class="price-small-text">$</span>920</h2>
                                <span class="price-small-text"> Million</span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="single-project-list">
                                <li><span>Client:</span>Building Construction</li>
                                <li><span>Location:</span>West Wood Street USA</li>
                                <li><span>Surface Area:</span>40,000 m2</li>
                                <li><span>Year Completed:</span>2020</li>
                                <li><span>Architect:</span>William &amp; H.</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Pricing Section -->
            </div>
        </div>
    </div>
    <!-- Page End -->

@endsection
