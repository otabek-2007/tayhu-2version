@extends('layouts.frontend')
@section('content')

<!-- Hero Section Start -->
<section class="hero-section hero-3">
    <div class="swiper-dot-2">
        <div class="dot"></div>
    </div>
    <div class="swiper hero-slider-3">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="hero-image"
                    style="background-image: url('assets/img/new-images/main-section-image-2.png')">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <a href="{{$banner->video_url}}"
                                    data-animation="fadeInUp" data-delay="1.3s"
                                    class="video-btn ripple video-popup">
                                    <i class="fas fa-play"></i>
                                </a>
                                <h1 data-animation="fadeInUp" data-delay="1.5s">
                                    {!! $banner->getTranslatedAttribute('title', app()->getLocale()) !!}
                                </h1>
                                <p data-animation="fadeInUp" data-delay="1.7s">
                                    {!! $banner->getTranslatedAttribute('content', app()->getLocale()) !!}
                                </p>
                                <div class="hero-button">
                                    <a href="about.html" data-animation="fadeInUp" data-delay="1.9s"
                                        class="theme-btn bg-white"><x-translation key="explore_more" /><i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Service Section Start -->
<section class="service-section-33 section-padding">
    <!-- <div class="shape-1">
                        <img src="assets/img/service/shape-1.png" alt="img">
                    </div> -->
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i><x-translation key="what_we_offer" /><i
                    class="fa-solid fa-arrow-right-long"></i></h6>
            <h2 class="splt-txt wow" data-splitting><x-translation key="our_product" /></h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @for($i = 0; $i < min(count($ourProducts), 4); $i++)
                @php
                $item=$ourProducts[$i];
                $images=json_decode($item->images);
                @endphp
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="service-card-items-2">
                        <div class="items-shape">
                            <img src="assets/img/service/items-shape-2.png" alt="img">
                        </div>
                        <div class="service-image">
                            @if($images)
                            <img src="{{ asset('storage/' . str_replace('\\', '/', $images[0])) }}" style="height: 190px; object-fit: cover;" alt="img">
                            @else
                            <p>Image not uploaded</p>
                            @endif
                            <div class="icon">
                                <img src="assets/img/icon/25.svg" alt="img">
                            </div>
                        </div>
                        <div class="service-content text-center">
                            <h3>
                                <a href="service-single/{{$item->id}}">
                                    {!! $item->category ? $item->category->getTranslatedAttribute('name', app()->getLocale()) : 'Category not available' !!}
                                </a>
                            </h3>
                            <p>{!! $item->getTranslatedAttribute('title', app()->getLocale()) !!}</p>
                            <a href="service-single/{{$item->id}}" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endfor
        </div>

    </div>
</section>

<!-- About Section Start -->
<section class="about-section-3 fix section-padding section-bg bg-cover"
    style="background-image: url('assets/img/about/bg-shape.png');">
    <div class="container">
        <div class="about-wrapper-3">
            <div class="row g-5">
                <div class="col-xl-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i><x-translation key="about_our_company" /><i class="fa-solid fa-arrow-right-long"></i></h6>
                            <h2 class="splt-txt wow" data-splitting><x-translation key="looking_into_future" /></h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".4s">
                            {!! Str::words($intoFuture->getTranslatedAttribute('content', app()->getLocale()), 30, "....") !!}</p>
                        <div class="row g-4">
                            <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                                <ul class="list">
                                    <li>
                                        <i class="fa-sharp fa-solid fa-check-double"></i>
                                        100% <x-translation key="satisfaction_work" />
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-check-double"></i>
                                        <x-translation key="professional_team" />
                                    </li>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-check-double"></i>
                                        <x-translation key="flexible" />
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                                <div class="video-image">
                                    <img src="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->video_image)) }}"
                                        alt="img" style="height: 164px !important; object-fit: cover;">
                                    <div class="video-box">
                                        <a href="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->video_link)) }}"
                                            class="video-btn video-popup">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-author">
                            <a href="{{route('about')}}" class="theme-btn wow fadeInUp" data-wow-delay=".3s"><x-translation key="explore_more" /> <i class="fa-solid fa-arrow-right"></i></a>
                            <div class="author-image wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->owner_image)) }}" style="border-radius:50%; object-fit:cover" width="80px" height="80px" alt="author-img">
                                <div class="content">
                                    <p>{!! $intoFuture->getTranslatedAttribute('owner_job', app()->getLocale()) !!}</p>
                                    <h4>{{ $intoFuture->owner_name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->image)) }}" alt="img"
                            style="height: 680px; object-fit: cover;">
                        <div class="arrow-shape">
                            <img src="assets/img/about/arrow.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section Start -->
<section class="project-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>our complete projects<i
                    class="fa-solid fa-arrow-right-long"></i></h6>
            <h2 class="splt-txt wow" data-splitting>Our Latest Projects</h2>
        </div>
    </div>
    <div class="project-wrapper style-2">
        <div class="main-box">
            @for($i = 0; $i < min(count($ourProducts), 8); $i++)
                @php
                $item=$ourProducts[$i];
                $images=json_decode($item->images);
                @endphp
                <div class="box wow fadeInUp" data-wow-delay="{{ ($i * 0.2) . 's' }}">
                    @if($images)
                    <div class="box-image" style="background-image: url('{{ asset('storage/' . str_replace('\\', '/', $images[0])) }}'); width: 170px; height: 310px; background-size: cover; background-position: center;">
                    </div>
                    @else
                    <p>Image not uploaded</p>
                    @endif
                </div>
                @endfor

        </div>
    </div>

</section>

<!-- Work Process Section Start -->
<section class="work-process-section-3 fix section-padding section-bg-2">
    <!-- <div class="shape-img">
                        <img src="assets/img/window-frame.png" alt="img" style="padding-left: 30px; padding-bottom: 20px;">
                    </div> -->
    <div class="container">
        <div class="work-process-wrapper-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="work-process-content">
                        <div class="work-process-box wow fadeInUp" data-wow-delay=".3s">
                            <div class="shape-img">
                                <img src="assets/img/new-images/icon-brown.svg" alt="img">
                            </div>
                            <div class="number">
                                01 .
                            </div>
                            <div class="content">
                                <h3><x-translation key="project_design" /></h3>
                                <p>{!!$futureFoundation->getTranslatedAttribute('project_design_text', app()->getLocale())!!}</p>
                            </div>
                        </div>
                        <div class="work-process-box style-2 wow fadeInUp" data-wow-delay=".5s">
                            <div class="shape-img">
                                <img src="assets/img/new-images/icon-brown.svg" alt="img">
                            </div>
                            <div class="number">
                                02 .
                            </div>
                            <div class="content">
                                <h3><x-translation key="property_management" /></h3>
                                <p>{!!$futureFoundation->getTranslatedAttribute('property_management_text', app()->getLocale())!!}</p>
                            </div>
                        </div>
                        <div class="work-process-box style-3 wow fadeInUp" data-wow-delay=".3s">
                            <div class="shape-img">
                                <img src="assets/img/new-images/icon-brown.svg" alt="img">
                            </div>
                            <div class="number">
                                03 .
                            </div>
                            <div class="content">
                                <h3><x-translation key="final_assemble" /></h3>
                                <p>{!!$futureFoundation->getTranslatedAttribute('final_assemble_text', app()->getLocale())!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="work-process-image">
                        <div class="section-title">
                            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>Working
                                Process<i class="fa-solid fa-arrow-right-long"></i></h6>
                            <h2 class="splt-txt wow" data-splitting>Building The Future's Foundations</h2>
                        </div>
                        <div class="track-image mt-4 mt-md-0">
                            <img src="assets/img/new-images/window-frame (2).png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achivements Section Start -->
<section class="achivements-section fix section-padding">
    <div class="shape-3">
        <img src="assets/img/skills/shape-3.png" alt="img">
    </div>
    <div class="container">
        <div class="achivements-wrapper style-3">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="achivements-content">
                        <div class="section-title">
                            <h6 class="wow fadeInUp"><i class="fa-solid fa-arrow-left-long"></i>Company
                                Status<i class="fa-solid fa-arrow-right-long"></i></h6>
                            <h2 class="splt-txt wow" data-splitting>Our Services meets The Highest
                                Standards.</h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                            Our commitment to excellence ensures that every project we undertake meets the
                            highest industry standards. We believe that quality service is not just a goal
                            but a fundamental principle that drives our operations. </p>
                        <div class="counter-items-area">
                            <div class="counter-content wow fadeInUp" data-wow-delay=".3s">
                                <h2><span class="count">45</span>k+</h2>
                                <span>project Complete</span>
                            </div>
                            <div class="counter-content wow fadeInUp" data-wow-delay=".5s">
                                <h2><span class="count">25</span>k+</h2>
                                <span>Active On Clients</span>
                            </div>
                            <div class="counter-content wow fadeInUp" data-wow-delay=".7s">
                                <h2><span class="count">2.4</span>k+</h2>
                                <span>Winning Awards</span>
                            </div>
                        </div>
                        <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".3s">Learn More
                            <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="achivements-image">
                        <img src="assets/img/new-images/status-2.jpg" alt="img" style="height: 500px;">
                        <div class="achivements-image-2 float-bob-y">
                            <img src="assets/img/new-images/status-1.jpg" alt="img"
                                style="width: 300px; height: 500px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection