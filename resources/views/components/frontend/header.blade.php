<!-- Start Header Navbar Area -->
<header id="zr-theme-menu" class="zr-theme-menu-header-navber-area">

    {{-- view cart start modalka--}}
    <div class="nav-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a class="navbar-brand js-scroll d-web btn" href="/">
                        <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" alt="logo">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="call-to-action">
                        <div class="top-info">
                            <i class="fa fa-map-pin"></i>
                            <p><span class="theme-color"><x-translation key="address" /></span><span><a
                                        class="text-dark"
                                        href="https://www.google.com/maps/place/Tayhu/@41.3889256,69.2801609,653m/data=!3m2!1e3!4b1!4m6!3m5!1s0x38ae8d4eb3c71ab7:0x29734a4e8feeaa44!8m2!3d41.3889256!4d69.2827358!16s%2Fg%2F11pc4ryj7p?entry=ttu&g_ep=EgoyMDI0MDkyNC4wIKXMDSoASAFQAw%3D%3D"
                                        target="_blank"><x-translation key="location_text" /></a></span></p>
                        </div>
                        <div class="top-info">
                            <i class="fa fa-phone"></i>
                            <p><span class="theme-color"><x-translation key="phone" /></span><a class="text-dark"
                                    href="+{{$site->phone_1}}"><span>+{{$site->phone_1}}</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 info-menu">
                    <nav class="navbar navbar-expand-lg navbar-light top-menu-one">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav flex-end">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if(app()->getLocale() == 'en')
                                            <x-translation key="en_lang_key" />
                                        @elseif(app()->getLocale() == 'uz')
                                            <x-translation key="uz_lang_key" />
                                        @else
                                            <x-translation key="ru_lang_key" />
                                        @endif
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <form method="POST" action="{{ route('change.language') }}">
                                            @csrf
                                            <button type="submit" name="lang" value="en" class="dropdown-item">
                                                <span class="fi fi-gb" style="font-size: 16px;"></span><x-translation key="en_lang_key" />
                                            </button>
                                            <button type="submit" name="lang" value="ru" class="dropdown-item">
                                                <span class="fi fi-ru" style="font-size: 16px;"></span><x-translation key="ru_lang_key" />
                                            </button>
                                            <button type="submit" name="lang" value="uz" class="dropdown-item">
                                                <span class="fi fi-ru" style="font-size: 16px;"></span><x-translation key="uz_lang_key" />
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    {{-- view cart end modalka--}}


    <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll d-mobile" href="/">
                <img src="{{ asset('storage/' . str_replace('\\', '/', $site->logo)) }}" alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                <span></span> <span></span>
            </button>
            <div class="top-social-icon">
                <a href="{{$site->facebook_link}}"><i class="fa-brands fa-facebook-f facebook-bg"></i></a>
                <a href="{{$site->telegram_link}}"><i class="fa-brands fa-telegram"></i></a>
                <a href="{{$site->youtube_link}}"><i class="fa-brands fa-youtube youtube-bg"></i></a>
                <a href="{{$site->instagram_link}}"><i class="fa-brands fa-instagram instagram-bg"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarDefault">
                <ul class="navbar-nav flex-between">
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('home')}}"><x-translation
                                key="home_link" />
                        </a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('about')}}"><x-translation
                                key="about_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('catalog')}}"><x-translation
                                key="catalog_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('projects')}}"><x-translation
                                key="project_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('blog')}}"><x-translation
                                key="blog_link" /></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('showroom')}}"><x-translation
                                key="showroom_link" /></a></li>

                    <li class="nav-item"><a class="nav-link js-scroll" href="{{route('contact')}}"><x-translation
                                key="contact_link" /></a></li>
                    <li class="nav-item"><a class="theme-button-dark" href="#" id="openModal"><x-translation
                                key="help_link" /><span></span></a>
                    </li>
                </ul>
            </div>
            <!-- Modal Structure -->
            <div id="helpModal" class="modal">
                <div class="modal-content">
                    <span class="close text-right" id="closeModal">&times;</span>
                    <h3 style="margin-left: 12px;margin-bottom: 10px; font-weight: 600;"><x-translation key="get_touch" /></h3>
                    <form class="contact-form form" id="ajax-contact" method="post" action="assets/s/contact.php">
                        <div class="col-lg-12">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-orange px-3 py-3" id="name"
                                                name="name" placeholder="{{ __('messages.name')}}" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control border-orange px-3 py-3" id="email"
                                                name="email" placeholder="{{ __('messages.email')}}" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control border-orange px-3 py-3" id="message"
                                                name="message" rows="10" placeholder="{{ __('messages.enter_message')}}"
                                                required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="theme-button-dark"
                                            data-text="Yuborish"><x-translation key="send_message" /><span></span></button>
                                    </div>
                                    <div class="messages">
                                        <div class="alert alert-success alert-dismissable hidden" id="msgSubmit">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                            <x-translation key="thankyou_message" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
<style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: hidden;
        /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.5);
        /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
        /* Could be more or less, depending on screen size */
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .border-orange {
        border: 2px solid #ffa500 !important;
    }
</style>
<script>
    // Get modal element
    const modal = document.getElementById("helpModal");

    // Get open modal button
    const openModalButton = document.getElementById("openModal");

    // Get close button
    const closeModalButton = document.getElementById("closeModal");

    // Listen for open click
    openModalButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default anchor click behavior
        modal.style.display = "block"; // Show the modal
    });

    // Listen for close click
    closeModalButton.addEventListener("click", function () {
        modal.style.display = "none"; // Hide the modal
    });

    // Listen for outside click
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none"; // Hide the modal if clicked outside
        }
    });

    // Handle form submission (optional)
    document.getElementById("ajax-contact").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission
        // You can handle form data here
        alert("Thank you! Your message has been sent!");
        modal.style.display = "none"; // Hide the modal after submission
    });

</script>
<!-- End Header Navbar Area -->