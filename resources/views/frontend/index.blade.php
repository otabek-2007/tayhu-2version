@extends('layouts.frontend')
@section('content')
<!-- Start Slider Are -->
<header id="slider-home" class="slider slider-prlx bg-b">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="bg-img valign" style="object-fit: cover;" data-background="{{ asset('storage/' . str_replace('\\', '/', $banner->image)) }}" data-overlay-dark="5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="caption text-center">
                                    <h2>{!! $banner->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                                    <span class="back-text">{!! $banner->getTranslatedAttribute('body', app()->getLocale()) !!}</span>
                                    <h1>{!! $banner->getTranslatedAttribute('background_word', app()->getLocale()) !!}</h1>
                                    <p style="max-width: 650px; margin: 0 auto;">{!! $banner->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>
<!-- End Slider Area -->


<!-- Services Section Start -->
<div id="services" class="section-padding pb-0">
    <div class="container position-relative">

        <div class="row d-flex align-items-center position-relative mtm-150">
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInLeft text-center"
                data-wow-delay="0.2s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/quality-icon.svg" alt="image">
                    <h5><x-translation key="quality" /><br></h5>
                    <p><x-translation key="quality_text" /></p>
                    <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span><x-translation key="view_detail"/><span></span></a> 
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInUp text-center"
                data-wow-delay="0.3s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/trust-icon.svg" alt="image">
                    <h5><x-translation key="trust" /></h5>
                    <p><x-translation key="trust_text" /></p>
                    <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span><x-translation key="view_detail"/><span></span></a> 
                </div>
            </div>
            <!-- single service -->

            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-12 wow kar-theme-single-service fadeInRight text-center"
                data-wow-delay="0.4s">
                <div class="zr-theme-single-service-card flip">
                    <img src="assets/images/icons/professionalism-icon.svg" alt="image">
                    <h5><x-translation key="professionalism" /></h5>
                    <p><x-translation key="professionalism_text" /></p>
                    <a class="theme-button-dark mt-20" href="#"><span class="plus">+</span><x-translation key="view_detail"/><span></span></a> 
                </div>
            </div>
            <!-- single service -->

        </div>
    </div>
</div>
<!-- Services Section End -->


<!-- Start Why us Section -->
<div id="about-us" class="about-us section-padding">
    <div class="container">
        <div class="guarantee-content">
            <div class="row mb-30">
                <div class="col-lg-6 col-md-12">
                    <div class="single-services-item">
                        <div class="services-heading">
                            <h2>{!! $intoFuture->getTranslatedAttribute('title', app()->getLocale()) !!}</h2>
                            <p>{!! $intoFuture->getTranslatedAttribute('content', app()->getLocale()) !!}</p>
                            <br>

                            <a class="theme-button-dark mt-20" href="{{route('about')}}"><span class="plus">+</span><x-translation key="read_more" /><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $intoFuture->image)) }}" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Counter Section Start -->
<div id="counter" class="counter-area section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.2s">
                    <img src="assets/images/icons/wide-icon.svg" alt="image">
                    <div class="counter" data-target="{{$clients->wide_assortment}}"></div>
                    <span><x-translation key="wide_assortment" /></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.4s">
                    <img src="assets/images/icons/custumer.svg" alt="image">
                    <div class="counter" data-target="{{$clients->happy_client}}"></div>
                    <span><x-translation key="happy_clients" /></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.6s">
                    <img src="assets/images/icons/architect.svg" alt="image">
                    <div class="counter" data-target="{{$clients->experiense}}"></div>
                    <span> <x-translation key="experience" /></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="counter-container fadeInUp wow" data-wow-delay="0.8s">
                    <img src="assets/images/icons/partnership-icon-2.svg" alt="image" style="color: #FFA500;">
                    <div class="counter" data-target="{{$clients->partnerships}}"></div>
                    <span><x-translation key="partnerships" /></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Counter Section Start -->
<div class="single-page">
    <div class="container">
        <nav aria-label="breadcrumb single-page">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><x-translation key="home_link" /></a></li>
                <li class="breadcrumb-item active" aria-current="page"><x-translation key="our_team_link" /></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Team Section Start -->
<div id="team" class="team section-padding">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
            <h2><x-translation key="our_team_link" /></h2>
            <h5><x-translation key="our_team_text" /></h5>
        </div>

        <div class="row gy-4">
            @foreach($teams as $item)
            <div class="col-xl-3 col-md-6 col-sm-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="member flip">
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $item->image_url)) }}" class="img-fluid" alt="">
                    <h4>{{$item->getTranslatedAttribute('name')}}
                    </h4>
                    <span>{{$item->getTranslatedAttribute('position')}}</span>
                </div>
            </div><!-- End Team Member -->

            @endforeach
        </div>

    </div>
</div>
<!-- Gallery Section Start -->
<section id="gallery" class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h2><x-translation key="our_project" /></h2>
                    <h5><x-translation key="our_project_text" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-list">
                    <ul class="nav" id="gallery-flters">
                        <li class="filter filter-active" data-filter=".all"><x-translation key="all_link" /><span></span></li>
                        <li class="filter" data-filter=".Construction"><x-translation key="construction_link" /><span></span></li>
                        <li class="filter" data-filter=".Electrical"><x-translation key="electrical_link" /><span></span></li>
                        <li class="filter" data-filter=".Architect"><x-translation key="architect_link" /><span></span></li>
                        <li class="filter" data-filter=".Building"><x-translation key="building_link" /><span></span></li>
                    </ul>
                </div>
            </div>
            <div class="gallery-container">
                <div class="row"> <!-- Add a row here to wrap the grid items -->
                    <!-- Electrical Projects -->
                    @foreach($electrical as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Electrical all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Building Projects -->
                    @foreach($building as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Building all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif
                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Construction Projects -->
                    @foreach($construction as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Construction all">
                        <div class="gallery-item">
                            @if(is_array($project->images_array) && count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Architect Projects -->
                    @foreach($architect as $project)
                    <div class="col-lg-3 col-md-4 col-sm-6 gallery-grid-item Architect all">
                        <div class="gallery-item">
                            @if(count($project->images_array) > 0)
                            <img class="image-1" src="{{ asset('storage/' . $project->images_array[0]) }}" alt="Product Image">
                            @else
                            <p>No images available.</p>
                            @endif

                            <div class="gallery-img-overlay">
                                <div class="gallery-content">
                                    <div class="top">
                                        <a href="/project-single/{{$project->id}}" class="poplink mr-7">
                                            <span class="icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                        </a>
                                        <a href="assets/images/photos/gallery-1.jpg" class="popimg">
                                            <span class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/project-single/{{$project->id}}" class="poplink">
                                            {{ $project->getTranslatedAttribute('title') }} <!-- Use the project title dynamically -->
                                        </a>
                                        <p>{!! Str::words($project->getTranslatedAttribute('content', app()->getLocale()), 3, '...') !!}</p> <!-- Dynamic project description -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- Close the row here -->
            </div>
        </div>
    </div>
</section>
<!-- Gallery Section End -->




<!-- Start Reservation Area -->
<section id="reservation" class="zr-theme-reservation-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <h2><x-translation key="help_link" /></h2>
                <h5><x-translation key="help_text" /></h5>
                <h2><a href="tel:+{{$site->phone_1}}" class="text-white">+{{$site->phone_1}}</a></h2>
                <div class="mt-20"><a class="theme-button-dark" href="{{route('contact')}}"><span class="plus">+</span><x-translation key="help_link" /><span></span></a></div>
            </div>
        </div>
    </div>
</section>
<!-- End Reservation Area -->
<!-- Team Section Start -->
<!-- Team Section End -->
<!-- Testimonials Section Start -->
<section id="review" class="testimonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><x-translation key="testimonial_link" /></h2>
                    <h5><x-translation key="people_love" /></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="testimonial-slide" class="owl-carousel owl-theme">
                    @foreach($testimonials as $item)
                    <div class="single-testimonial">
                        <div class="testi-content-inner">
                            <div class="testimonial-content">
                                <p>{!! $item->message !!}</p>
                            </div>
                            <div class="testimonial-bio">
                                <div class="bio-info">
                                    <h3 class="name">{!! $item->name !!}</h3>
                                </div>
                            </div>
                            <div class="rating-box-testimonial">
                                <ul>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><i class="fa fa-star {{ $i <= $item->star_rating ? 'selected_star' : '' }}"></i></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 nav-item text-center mt-5">
                    <button style="color:white !important;" class="theme-button-dark" data-toggle="modal" data-target="#testimonial_modal">
                        <x-translation key="write_review" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .modal-backdrop {
        display: none;
    }
    .custom-alert {
        display: none;
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4CAF50; 
        color: white;
        padding: 15px 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        font-size: 16px;
        z-index: 9999;
        transition: opacity 0.3s ease;
    }
    .custom-alert.show {
        display: block;
        opacity: 1;
    }
</style>

<div id="success-alert" class="custom-alert">
    <p><x-translation key="successfilly_review" /></p>
</div>

<!-- Testimonials modal -->
<div class="modal fade" id="testimonial_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color:#ffa500"><x-translation key="write_review" /></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #ffa500">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 p-0">
                    <div class="controls">
                        <form id="testimonialForm" method="POST" action="{{ route('store-testimonial') }}">
                            @csrf
                            <input type="hidden" id="star_rating" name="star_rating" value="0">
                            <div class="rating-box mb-3 col-12 p-0">
                                <ul id="testimonial_star">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li><i class="fa fa-star" data-index="{{ $i }}"></i></li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-orange px-3 py-3" id="message" name="message" rows="3" placeholder="{{ __('messages.review')}}" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-orange px-3 py-3" id="name" name="name" placeholder="{{ __('messages.name')}}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-orange px-3 py-3" id="last_name" name="last_name" placeholder="{{ __('messages.last')}}" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="theme-button-dark"><x-translation key="send_review" /></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Owl Carousel Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        // Testimonial Carousel
        $('#testimonial-slide').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: false,
            dots: false,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        // Handle star rating click
        $('#testimonial_star li i').on('click', function() {
            var index = $(this).data('index');
            $('#star_rating').val(index);
            $('#testimonial_star li i').removeClass('selected_star');
            $('#testimonial_star li i').each(function(i) {
                if (i < index) {
                    $(this).addClass('selected_star');
                }
            });
        });

        // Handle form submission for testimonials
        $('#testimonialForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Show the alert
                    $('#success-alert').addClass('show');

                    // Hide the alert after 2 seconds
                    setTimeout(function() {
                        $('#success-alert').removeClass('show');
                    }, 2000);

                    // Close the modal
                    $('#testimonial_modal').modal('hide');

                    // Clear the form
                    $('#testimonialForm')[0].reset();
                },
                error: function(error) {
                    console.error("Submission failed", error);
                    // Handle errors if needed
                }
            });
        });
    });
</script>

<style>
.selected_star {
    color: #ffa500;
}
.rating-box-testimonial ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.rating-box-testimonial ul li {
    display: inline-block;
    margin-right: 5px; /* Adjust spacing between stars as needed */
}
.custom-alert {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50; /* Green for success */
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    font-size: 16px;
    z-index: 9999;
    transition: opacity 0.3s ease;
}

.custom-alert.show {
    display: block;
    opacity: 1;
}



</style>
