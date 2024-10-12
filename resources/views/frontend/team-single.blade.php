<?php
$lang = app()->getLocale();
?>

@extends('layouts.frontend')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('/assets/img/new-images/tayhu-company-images/bg-4\ 1.png');">
        <div class="shape-image float-bob-y">
            <img src="/assets/img/vector.png" alt="img">
        </div>
        <div class="container">
            <div class="breadcrumb-wrapper-items">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">team details</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-sharp fa-solid fa-slash-forward"></i>
                        </li>
                        <li>
                            team details
                        </li>
                    </ul>
                </div>
                <div class="breadcrumb-image">
                    <div class="bar-shape">
                        <img src="/assets/img/breadcrumb-bar.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="team-details-wrapper">
                <div class="team-details-items">
                    <div class="details-image">
                        <img src="/storage/{{ $team->image_url }}" alt="img">
                    </div>
                    <div class="team-details-content">
                        <div class="details-header">
                            <h3>
                                {{ $team->getTranslatedAttribute('name' , $lang) }}
                            </h3>
                            <span>{{ $team->getTranslatedAttribute('position' , $lang) }}</span>
                        </div>
                        <p class="cont">
                            {{ $team->getTranslatedAttribute('description' , $lang) }}
                        </p>
                        <h6 class="team-details-info"><span class="text-title">Phone Number:</span> <span class="text-data"><a href="tel:{{ $team->phone_number }}">{{ $team->phone_number }}</a></span></h6>
                        <h6 class="team-details-info"><span class="text-title">Email:</span> <span class="text-data"><a href="{{ $team->email }}">{{ $team->email }}</a></span></h6>
                        <h6 class="team-details-info"><span class="text-title">Experience:</span> <span class="text-data">{{ $team->Experience }}</span></h6>
                        <h6 class="team-details-info"><span class="text-title">Availability:</span> <span class="text-data">{{ $team->Availability }}</span></h6>
                        <div class="social-icon d-flex align-items-center">
                            <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $team->telegram }}"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="personal-skills-items">
                    <div class="row g-5">
                        <div class="col-lg-5">
                            <h3 class="mb-3 splt-txt wow" data-splitting>About Me</h3>
                            <p>
                                {!! $team->getTranslatedAttribute('about_text' , $lang) !!}
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="mb-3 splt-txt wow" data-splitting>Personal skills</h3>
                            <p>
                                {!! $team->getTranslatedAttribute('personal_skill' , $lang) !!}
                            </p>
                            <div class="skill-feature-items">
                                <div class="skill-feature">
                                    <h3 class="box-title">Architecture</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">85</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-feature">
                                    <h3 class="box-title">Construction</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">90</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-feature">
                                    <h3 class="box-title">Interior Design</h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 75%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                            <div class="progress-value"><span class="counter-number2">75</span>%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section fix section-padding pt-0">
        <div class="container">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                   @foreach($partners as $partner)
                        <div class="swiper-slide">
                            <div class="brand-image center">
                                <img src="{{ asset('storage/' . $partner->icon) }}" alt="img">
                            </div>
                        </div>
                   @endforeach
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="brand-image center">--}}
{{--                            <img src="/assets/img/brand/brand-logo-2.png" alt="img">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="brand-image center">--}}
{{--                            <img src="/assets/img/brand/brand-logo-3.png" alt="img">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="brand-image center">--}}
{{--                            <img src="/assets/img/brand/brand-logo-4.png" alt="img">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="brand-image center">--}}
{{--                            <img src="/assets/img/brand/brand-logo-5.png" alt="img">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
