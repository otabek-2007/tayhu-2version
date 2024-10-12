@extends('layouts.frontend')
@section('content')
<link rel="stylesheet" href="{{asset('assets/stylesheets/main.css')}}">
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/service/product-cover.JPG');">
    <div class="shape-image float-bob-y">
        <!-- <img src="assets/img/vector.png" alt="img"> -->
    </div>
    <div class="container">
        <div class="breadcrumb-wrapper-items">
            <div class="page-heading">
                <div class="breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">Product</h1>
                </div>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-slash-forward"></i>
                    </li>
                    <li>
                        Product
                    </li>
                </ul>
            </div>
            <div class="breadcrumb-image">
                <!-- <img src="assets/img/breadcrumb-image.png" alt="img" class="float-bob-x"> -->
                <div class="bar-shape">
                    <!-- <img src="assets/img/breadcrumb-bar.png" alt="img"> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Details Section Start -->
<section class="service-details-section section-padding">
    <div class="container">
        <div class="service-details-wrapper">
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <div class="service-details-image reveal image-anime">
                        @php
                        $images=json_decode($singleProduct->images);
                        @endphp
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $images[0])) }}" style="height:850px" alt="img">
                    </div>
                    <div class="service-details-content">
                        <h2>{!! $singleProduct->getTranslatedAttribute('name', app()->getLocale())!!}</h2>
                        <p>
                        <h3 class="mb-2">Xususiyatlari:</h3>
                        <ul class="ps-3 pb-3" style="list-style-type: disc;">
                            @if($singleProduct->property)
                            <li><b>{{ $singleProduct->property->getTranslatedAttribute('name', app()->getLocale())}}: </b> {!! $singleProduct->property->getTranslatedAttribute('description', app()->getLocale())!!}</li>
                            @else
                            <p>Properties has not</p>
                            @endif
                        </ul>


                        </p>
                        <div class="row g-4">
                            <div class="col-lg-7">
                                <div class="service-details-image reveal image-anime">
                                    @if($images[1])
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $images[1])) }}" style="height:450px" alt="img">
                                    @else
                                    <p>Images has not</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="content">
                                    <h3>Xizmatlar Foydasi:</h3>
                                    <p class="mt-2 mb-2">Nega Blooming Beige Wall Panel tanlashingiz kerak?</p>

                                </div>
                                <ul class="details-list">
                                    <li><i class="fa-solid fa-circle-check"></i><x-translation key="modern_design" />:{{$singleProduct->getTranslatedAttribute('modern_design', app()->getLocale())}}</li>
                                    <li><i class="fa-solid fa-circle-check"></i><x-translation key="quality_material" />:{{$singleProduct->getTranslatedAttribute('quality_material', app()->getLocale())}} </li>
                                    <li><i class="fa-solid fa-circle-check"></i><x-translation key="easy_maintenance" />: {{$singleProduct->getTranslatedAttribute('easy_maintenance', app()->getLocale())}}</li>
                                    <li><i class="fa-solid fa-circle-check"></i><x-translation key="environmentally_friendly" />: {{$singleProduct->getTranslatedAttribute('natural_clean', app()->getLocale())}}</li>
                                </ul>
                            </div>
                        </div>
                        <h4><x-translation key="simple_step" /> </h4>
                        <p class="mt-3"><x-translation key="change_door_step" />:</p>
                        <div class="row g-4 mt-2">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-details-box">
                                    <div class="icon">
                                        <img src="assets/img/icon/15.svg" alt="img">
                                        <h5><x-translation key="planning" /></h5>
                                    </div>
                                    <p><x-translation key="choose_panels" /></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-details-box">
                                    <div class="icon">
                                        <img src="assets/img/icon/17.svg" alt="img">
                                        <h5><x-translation key="set_up" /></h5>
                                    </div>
                                    <p><x-translation key="set_up_easy" /></p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="service-details-box">
                                    <div class="icon">
                                        <img src="assets/img/icon/16.svg" alt="img">
                                        <h5><x-translation key="design" /></h5>
                                    </div>
                                    <p>Tanlangan panellarning rang va naqshini interyeringizga moslang</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">

                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="service-details.html">All</a> <span><i
                                                class="fa-solid fa-arrow-right-long"></i></span></li>
                                    <li><a href="service-details.html">MDF Panels </a> <span><i
                                                class="fa-solid fa-arrow-right-long"></i></span></li>
                                    <li><a href="service-details.html">Ceiling Panels</a> <span><i
                                                class="fa-solid fa-arrow-right-long"></i></span></li>
                                    <li class="active"><a href="service-details.html">Wall Panels</a><span><i
                                                class="fa-solid fa-arrow-right-long"></i></span></li>
                                    <li><a href="service-details.html">Window Frame</a> <span><i
                                                class="fa-solid fa-arrow-right-long"></i></span></li>

                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Download</h3>
                            </div>
                            <div class="brochures-download-items">
                                <div class="brochures-items">
                                    <div class="icon">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Our Catalogue</h5>
                                        <p>Download</p>
                                    </div>
                                    <!-- Update the download link to point to your PDF file -->

                                </div>
                                <a href="path/to/your/catalogue.pdf" class="download-btn" download>
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            </div>
                            <div class="brochures-download-items">
                                <div class="brochures-items">
                                    <div class="icon">
                                        <i class="far fa-file-pdf"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Our Catalogue</h5>
                                        <p>Download</p>
                                    </div>
                                    <!-- Update the download link to point to your PDF file -->

                                </div>
                                <a href="path/to/your/catalogue.pdf" class="download-btn" download>
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection