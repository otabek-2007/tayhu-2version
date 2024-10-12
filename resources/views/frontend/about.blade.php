<?php

use App\Models\IndustrialPower;

$lang = app()->getLocale();

?>

@extends('layouts.frontend')
@section('content')
<!-- About Section Start -->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('storage/' .  $about->image) }}" alt="img"
                            class="wow fadeInLeft" data-wow-delay=".2s"
                            style="height: 600px; object-fit: cover;">
                        <div class="about-image-2 wow fadeInUp" data-wow-delay=".4s">
                            <img src="{{ asset('storage/'.  $about->video_image) }}" alt="img"
                                style="height: 300px;object-fit: cover;">
                            <div class="video-box">
                                <a href="{{ $about->video_link }}"
                                    class="video-btn video-popup">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="about-line-shape">
                            <img src="/assets/img/about/about-shape-3.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>Tayhu<i
                                    class="fa-solid fa-arrow-right-long"></i></h6>
                            <h2 class="splt-txt wow" data-splitting>{{ $about->getTranslatedAttribute('title', $lang) }}</h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                            {!! $about->getTranslatedAttribute('content', $lang)!!}</p>
                        <ul class="list-items wow fadeInUp" data-wow-delay=".2s">
                            <li> <i class="fa-solid fa-circle-check"></i>
                                <x-translation key="innovative_about " />
                            </li>
                            <li> <i class="fa-solid fa-circle-check"></i>
                                <x-translation key="custom_made" />
                            </li>
                            <li> <i class="fa-solid fa-circle-check"></i>
                                <x-translation key="high_performance" />
                            </li>
                        </ul>
                        <div class="about-author">
                            <div class="author-image wow fadeInUp" data-wow-delay=".2s">
                                <img style="height: 80px; width:80px; border-radius:50%; object-fit:cover;" src="{{ asset('storage/' . $about->owner_image) }}" alt="author-img">
                                <div class="content">
                                    <p>{{ $about->getTranslatedAttribute('owner_job', $lang) }}</p>
                                    <h4>{{ $about->getTranslatedAttribute('owner_name', $lang) }}</h4>
                                </div>
                            </div>
                            <img src="assets/img/about/signature.png" alt="img" class="wow fadeInUp"
                                data-wow-delay=".4s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achivements Section Start -->
<section class="achivements-section fix">
    <div class="container">
        <div class="achivements-wrapper-2 section-padding">
            <div class="bg-shape">
                <img src="assets/img/new-images/figure-brown-1.png" alt="img">
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="achivements-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp"><i
                                    class="fa-solid fa-arrow-left-long"></i><x-translation key="ACHIVEMENTS" /><i
                                    class="fa-solid fa-arrow-right-long"></i></h6>
                            <h2 class="splt-txt wow" data-splitting><x-translation key="Industrial_Power" />, <br> <x-translation key="Worldwide_Influence" /></h2>
                        </div>
                        <a href="{{route('contact')}}" class="theme-btn bg-white mt-3 mt-md-0 wow fadeInUp"
                            data-wow-delay=".4s">
                            <x-translation key="MAKE_AN_APPOINTMENT" />
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="achivements-right-items">
                        <div class="border-shape">
                            <img src="assets/img/border.png" alt="img">
                        </div>
                        <div class="achivements-item">
                            <div class="counter-items wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <img src="assets/img/icon/21.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">{{ $industrial_power->project_complete }}</span>k+</h2>
                                    <p><x-translation key="project_complete" /></p>
                                </div>
                            </div>
                            <div class="counter-items wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <img src="assets/img/icon/22.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">{{ $industrial_power->active_on_clients }}</span>k+</h2>
                                    <p><x-translation key="Active_On_Clients" /></p>
                                </div>
                            </div>
                        </div>
                        <div class="achivements-item">
                            <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <img src="assets/img/icon/23.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">{{ $industrial_power->experience_team }}</span>+</h2>
                                    <p><x-translation key="Experience_Team" /></p>
                                </div>
                            </div>
                            <div class="counter-items style-2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <img src="assets/img/icon/24.svg" alt="img">
                                </div>
                                <div class="content">
                                    <h2><span class="count">{{ $industrial_power->winning_awards }}</span>k+</h2>
                                    <p><x-translation key="Winning_Awards" /></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="man-image float-bob-x ">
        <img src="assets/img/man.png" alt="img">
    </div>
</section>
<section class="project-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            @foreach($certificates as $item)
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="project-card-items">
                    <div class="project-image">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" alt="img">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image)) }}" alt="img">
                    </div>
                    <div class="project-content">
                        <h3><a href="{{route('projects')}}">{{$item->getTranslatedAttribute('title', app()->getLocale())}}</a></h3>
                    </div>
                    <div class="shape-img">
                        <img src="assets/img/new-images/figure-brown-3.png" alt="img">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section section-padding pt-0">

    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i><x-translation key="our_team_members" /><i
                    class="fa-solid fa-arrow-right-long"></i></h6>
            <h2 class="splt-txt wow" data-splitting><x-translation key="Our_Professional_Team" /></h2>
        </div>
        <div class="row">
            @foreach($teams as $team)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp">
                <div class="team-box-items">
                    <div class="social-icon d-grid align-items-center">
                        <a href="{{ $team->telegram }}"><i class="fab fa-telegram"></i></a>
                        <a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="team-image">
                        <img src="{{ asset('storage/' . $team->image_url) }}" alt="img">
                    </div>
                    <div class="team-content">
                        <h5><a href="{{ route('team.single', $team->id) }}">{{ $team->getTranslatedAttribute('name', $lang)}}</a></h5>
                        <p>{{ $team->getTranslatedAttribute('position', $lang) }}</p>
                        <a href="{{ route('team.single', $team->id) }}" class="icon"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
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