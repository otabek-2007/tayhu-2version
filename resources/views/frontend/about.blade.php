@extends('layouts.frontend')
@section('content')
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('about') }}"><x-translation key="about_link" /></a> </li>
            </ol>
        </nav>
    </div>
</div>

<!-- Page Section Start -->
<div id="page" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2><x-translation key="about_us_link" /></h2>
                </div>
            </div>
        </div>
        <div class="about-us">
            @foreach($about as $index => $item)
            <div class="row mb-30">
                @if($index % 2 == 0)
                <!-- Agar indeks juft bo'lsa: Chapda kontent, o'ngda rasm -->
                <div class="col-lg-6 col-md-12">
                    <div class="single-services-item">
                        <div class="services-heading">
                            <h2>{!! $item->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                            <p>{!! $item->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                            <br>
                            <a class="theme-button-dark mt-20" href="{{route('projects')}}"><span class="plus">+</span><x-translation key="view_project" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" class="img-fluid" alt="image">
                </div>
                @else
                <!-- Agar indeks toq bo'lsa: Chapda rasm, o'ngda kontent -->
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="single-services-item">
                        <div class="services-heading">
                            <h2>{!! $item->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                            <p>{!! $item->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                            <br>
                            <a class="theme-button-dark mt-20" href="{{route('projects')}}"><span class="plus">+</span><x-translation key="view_project"/></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Page End -->
<!-- Start Guarantee Section -->
<section class="pb-100 bg-grey section-padding">
    <div class="container guarantee-section">
        <div class="section-title">
            <h2><x-translation key="company_link" /></h2>
            <!-- <h5>Ensuring high-quality construction materials & Timely Project Completion</h5> -->
        </div>
        <div class="guarantee-content">
            <div class="row">
                @foreach($company_advantages as $item)
                <div class="col-lg-4 col-md-12 mb-20">
                    <div class="single-services-item active">
                        <div class="services-heading-new text-center">
                            <h3>{!! $item->getTranslatedAttribute('title', app()->getLocale()) !!}</h3>
                            <p>{!! $item->getTranslatedAttribute('description', app()->getLocale()) !!}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Guarantee Section -->
<!-- Partner Section Start -->
<div class="theme-partner-area bg-grey section-padding">
    <div class="container">
        <div class="owl-carousel">
            @foreach($partners as $item)
            <div class="item">
                <div class="theme-single-press-content flip">
                    <img src="{{ asset('storage/' . $item->icon) }}" style="height:150px; object-fit:cover;" alt="image">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Partner Section End -->
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Include Owl Carousel CSS and JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000, // har 3 soniyada aylanish
            autoplayHoverPause: true,
            nav: false, // navigatsiya tugmalarini o'chirish
            dots: false, // nuqtalarini o'chirish
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />